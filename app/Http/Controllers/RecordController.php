<?php

namespace App\Http\Controllers;

use App\PaymentItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class RecordController extends Controller
{
    //
    public function index(){
        $records = PaymentItem::all();
        return view('records', compact('records'));
    }

    //create route for all records  indexfunction not needed if this function is implemented

    public function getRecords(){
        return DataTables::of(PaymentItem::query())->make(true);
    }

    public function addRecord(){
        return view('addRecord');

    }

}
