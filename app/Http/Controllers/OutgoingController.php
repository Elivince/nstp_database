<?php

namespace App\Http\Controllers;

use App\Models\Outgoing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OutgoingController extends Controller
{
    public function showTable(Request $request)
    {
        $search = $request->input('search');

        $outgoings = Outgoing::query()
            ->when($search, function ($query, $search) {
                return $query->where('outgoing_no', 'like', '%' . $search . '%')
                    ->orWhere('date', 'like', '%' . $search . '%')
                    ->orWhere('to_office', 'like', '%' . $search . '%')
                    ->orWhere('for', 'like', '%' . $search . '%')
                    ->orWhere('subject', 'like', '%' . $search . '%')
                    ->orWhere('remarks', 'like', '%' . $search . '%')
                    ->orWhere('action', 'like', '%' . $search . '%')
                    ->orWhere('action_date', 'like', '%' . $search . '%');
            })
            ->sortable($request->except('page'))
            ->paginate(10);

        return view('outgoing', ['outgoings' => $outgoings]);
    }

    public function addRecordToTable(Request $request)
    {
        $incomingFields = $request->validate([
            'to_office' => 'required',
            'for' => 'required',
            'subject' => 'required',
            'remarks'=> 'required',
            'action' => 'nullable',
            'action_date' => 'nullable'
        ]);

        $incomingFields['date'] = today();

        $incomingFields['received_by'] = Auth::user()->name;

        $incomingFields['to_office'] = strip_tags($incomingFields['to_office']);
        $incomingFields['for'] = strip_tags($incomingFields['for']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);
        $incomingFields['action'] = strip_tags($incomingFields['action']);
        $incomingFields['action_date'] = strip_tags($incomingFields['action_date']);


        Outgoing::create($incomingFields);

        return redirect('/outgoing');
    }

    public function showEditOutgoingPage(Outgoing $outgoing)
    {
        return view('editOutgoing', ['outgoing' => $outgoing]);
    }

    public function editRecordFromTable(Outgoing $outgoing, Request $request)
    {
        $incomingFields = $request->validate([
            'to_office' => 'required',
            'for' => 'required',
            'subject' => 'required',
            'remarks'=> 'required',
            'action' => 'nullable',
            'action_date' => 'nullable'
        ]);

        $incomingFields['to_office'] = strip_tags($incomingFields['to_office']);
        $incomingFields['for'] = strip_tags($incomingFields['for']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);
        $incomingFields['action'] = strip_tags($incomingFields['action']);
        $incomingFields['action_date'] = strip_tags($incomingFields['action_date']);

        $outgoing->update($incomingFields);

        return redirect('/outgoing');
    }

    public function deleteRecordFromTable(Outgoing $outgoing)
    {
        $outgoing->delete();
        return redirect('/outgoing');
    }
}
