<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;
use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\FileSystem;

class DashboardController extends Controller
{
    public function countStatistics()
    {
        $trackerCount = Tracker::count();
        $incomingCount = Incoming::count();
        $outgoingCount = Outgoing::count();

        return view('dashboard', compact('trackerCount', 'incomingCount', 'outgoingCount'));
    }
}
