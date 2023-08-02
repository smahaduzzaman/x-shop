<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsubscribeController extends Controller
{
    public function index()
    {
        return view('unsubscribe');
    }
}
