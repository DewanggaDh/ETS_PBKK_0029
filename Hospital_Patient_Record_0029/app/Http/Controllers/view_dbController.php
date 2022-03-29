<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class view_dbController extends Controller
{
    public function index(){
        $users = DB::select('select * from db_rumah_sakit');
        return view('view_db', ['users'=>$users]);
    }
}
