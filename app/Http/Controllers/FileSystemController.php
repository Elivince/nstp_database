<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileSystemController extends Controller
{
    public function showTable()
    {
        return view('file-system');
    }
}
