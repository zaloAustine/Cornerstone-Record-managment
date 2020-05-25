<?php

namespace App\Http\Controllers;

use App\PaymentItem;
use App\Sermon;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function index(){

        $sum = PaymentItem::where('type', 0)->sum('amount');

        return view('dashboard', compact('sum'));

    }



}
