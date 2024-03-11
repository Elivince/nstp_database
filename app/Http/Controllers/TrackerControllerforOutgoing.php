<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TrackerControllerforOutgoing extends Controller
{
    public function showTable()
    {
        $requests = Tracker::all();
        return view('outgoing', ['requests' => $requests]);
    }

    public function addRecordToTable(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'component' => 'required',
            'campus' => 'required',
            'course' => 'required',
            'graduation_year' => 'required',
        ]);

        $incomingFields['date'] = today();

        $incomingFields['issued_by'] = Auth::user()->name;

        Tracker::create($incomingFields);
        return redirect('/outgoing');
    }

    public function deleteRecordFromTable(Tracker $request)
    {
        $request->delete();
        return redirect('/outgoing');
    }
}
