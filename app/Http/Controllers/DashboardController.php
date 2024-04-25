<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;
use App\Models\Incoming;
use App\Models\Outgoing;

class DashboardController extends Controller
{
    public function getInfos()
    {
        $trackerCount = Tracker::count();
        $incomingCount = Tracker::count();
        $outgoingCount = Outgoing::count();

        $incomings = Incoming::orderBy('date', 'desc')->take(5)->get();
        $outgoings = Outgoing::orderBy('date', 'desc')->take(5)->get();

        return view('dashboard', compact('trackerCount', 'incomingCount', 'outgoingCount', 'incomings', 'outgoings'));
    }
}
