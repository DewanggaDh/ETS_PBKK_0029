<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }
    public function proses(Request $request)
    {
        
    }
}
