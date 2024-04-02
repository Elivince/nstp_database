<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomingController extends Controller
{
    public function showTable(Request $request)
    {
        $search = $request->input('search');

        $incomings = Incoming::query()
            ->when($search, function ($query, $search) {
                return $query->where('received_by', 'like', '%' . $search . '%')
                    ->orWhere('date', 'like', '%' . $search . '%')
                    ->orWhere('from_office', 'like', '%' . $search . '%')
                    ->orWhere('subject', 'like', '%' . $search . '%')
                    ->orWhere('action_date', 'like', '%' . $search . '%')
                    ->orWhere('action_received_by', 'like', '%' . $search . '%')
                    ->orWhere('incoming_no', 'like', '%' . $search . '%')
                    ->orWhere('remarks', 'like', '%' . $search . '%');
            })
            ->sortable($request->except('page'))
            ->paginate(10);

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

    public function showEditIncomingPage(Incoming $incoming)
    {
        return view('editIncoming', ['incoming' => $incoming]);
    }

    public function editRecordFromTable(Incoming $incoming, Request $request)
    {
        $incomingFields = $request->validate([
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

        $incoming->update($incomingFields);

        return redirect('/incoming');
    }

    public function deleteRecordFromTable(Incoming $incoming)
    {
        $incoming->delete();
        return redirect('/incoming');
    }
}
