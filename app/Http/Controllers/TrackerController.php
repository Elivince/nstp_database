<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackerController extends Controller
{
    public function showTable(Request $request)
    {
        $search = $request->input('search');

        $requests = Tracker::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('date', 'like', '%' . $search . '%')
                    ->orWhere('component', 'like', '%' . $search . '%')
                    ->orWhere('campus', 'like', '%' . $search . '%')
                    ->orWhere('course', 'like', '%' . $search . '%')
                    ->orWhere('graduation_year', 'like', '%' . $search . '%')
                    ->orWhere('issued_by', 'like', '%' . $search . '%');
            })
            ->sortable($request->except('page'))
            ->paginate(10);

        return view('tracker', ['requests' => $requests]);
    }

    public function addRecordToTable(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'component' => 'required',
            'campus' => 'required',
            'course' => 'required',
            'graduation_year' => 'required',
            'serial_no' => 'nullable',
            'remarks' => 'nullable',
        ]);

        $incomingFields['date'] = today();

        $incomingFields['issued_by'] = Auth::user()->name;

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['component'] = strip_tags($incomingFields['component']);
        $incomingFields['campus'] = strip_tags($incomingFields['campus']);
        $incomingFields['course'] = strip_tags($incomingFields['course']);
        $incomingFields['graduation_year'] = strip_tags($incomingFields['graduation_year']);
        $incomingFields['serial_no'] = strip_tags($incomingFields['serial_no']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);

        Tracker::create($incomingFields);

        return redirect('/tracker');
    }

    public function showEditRequestPage(Tracker $request)
    {
        return view('editRequest', ['request' => $request]);
    }

    public function editRecordFromTable(Tracker $request, Request $requestForm)
    {
        $incomingFields = $requestForm->validate([
            'name' => 'required',
            'component' => 'required',
            'campus' => 'required',
            'course' => 'required',
            'graduation_year' => 'required',
            'serial_no' => 'nullable',
            'remarks' => 'nullable',
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['component'] = strip_tags($incomingFields['component']);
        $incomingFields['campus'] = strip_tags($incomingFields['campus']);
        $incomingFields['course'] = strip_tags($incomingFields['course']);
        $incomingFields['graduation_year'] = strip_tags($incomingFields['graduation_year']);
        $incomingFields['serial_no'] = strip_tags($incomingFields['serial_no']);
        $incomingFields['remarks'] = strip_tags($incomingFields['remarks']);

        $request->update($incomingFields);

        return redirect('/tracker');
    }

    public function deleteRecordFromTable(Tracker $request)
    {
        $request->delete();

        return redirect('/tracker');
    }
}
