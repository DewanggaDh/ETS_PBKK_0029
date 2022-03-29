<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyController extends Controller
{
    public function input()
    {
        return view('form_history');
    }
    public function proses(Request $request)
    {
        
    }
}
