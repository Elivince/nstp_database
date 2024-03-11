<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomingController extends Controller
{
    public function showTable()
    {
        $incomings = Incoming::all();
        return view('incoming', ['incomings' => $incomings]);
    }

    public function addRecordToTable(Request $request)
    {
        $incomingFields = $request->validate([
            'from_office' => 'required',
            'subject' => 'required',
            'remarks'=> 'required',
            'action' => 'nullable',
            'action_date' => 'nullable'
        ]);

        $incomingFields['date'] = today();

        $incomingFields['received_by'] = Auth::user()->name;

        $incomingFields['from_office'] = strip_tags($incomingFields['from_office']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);
        $incomingFields['action'] = strip_tags($incomingFields['action']);
        $incomingFields['action_date'] = strip_tags($incomingFields['action_date']);


        Incoming::create($incomingFields);

        return redirect('/incoming');
    }

    public function showEditRequestPage(Incoming $incoming)
    {
        return view('editRequest', ['request' => $incoming]);
    }

    public function editRecordFromTable(Incoming $incoming, Request $request)
    {
        $incomingFields = $incoming->validate([
            'from_office' => 'required',
            'subject' => 'required',
            'remarks'=> 'required',
            'action' => 'nullable',
            'action_date' => 'nullable'
        ]);

        $incomingFields['from_office'] = strip_tags($incomingFields['from_office']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);
        $incomingFields['action'] = strip_tags($incomingFields['action']);
        $incomingFields['action_date'] = strip_tags($incomingFields['action_date']);

        $request->update($incomingFields);

        return redirect('/incoming');
    }

    public function deleteRecordFromTable(Incoming $incoming)
    {
        $incoming->delete();
        return redirect('/incoming');
    }
}
