<?php

namespace App\Http\Controllers;

use App\Models\Request;

class PageController extends Controller
{
    public function showTable()
    {
        $requests = Request::all();
        return view('tracker', ['requests' => $requests]);
    }
}
