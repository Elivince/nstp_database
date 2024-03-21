<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalendarController extends Controller
{
    public function addEventToCalendar(Request $request)
    {
        $incomingFields = $request->validate([
            'event_title' => 'required',
            'event_date' => 'required',
            'event_theme' => 'required',
        ]);

        $incomingFields['event_title'] = strip_tags($incomingFields['event_title']);
        $incomingFields['event_date'] = strip_tags($incomingFields['event_date']);
        $incomingFields['event_theme'] = strip_tags($incomingFields['event_theme']);

        Calendar::create($incomingFields);

        return redirect('/dashboard');
    }
}
