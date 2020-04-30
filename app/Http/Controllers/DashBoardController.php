<?php

namespace App\Http\Controllers;

use App\Sermon;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }
}
