<?php

namespace App\Http\Controllers;

use App\Models\Request;

class RequestController extends Controller
{
    public function showTable()
    {
        $requests = Request::all();
        return view('tracker', ['requests' => $requests]);
    }
}
