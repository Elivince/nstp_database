<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileSystemController extends Controller
{
    public function showTable()
    {
        //return view('file-system');
        return view('navigateToDrive');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);
    
        $file = $request->file('file');
        $path = $file->store('uploads');
    
        // You can return a response or redirect as needed
        return response()->json(['path' => $path]);
    }

    public function deleteFile($path)
{
    Storage::delete($path);
    return response()->json(['success' => true]);
}
}
