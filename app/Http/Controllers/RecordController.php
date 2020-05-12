<?php

namespace App\Http\Controllers;

use App\Item;
use App\PaymentItem;
use App\Sermon;
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
        //map id to name in drop down
        $item = Item::pluck('name','name');
        return view('addRecord', compact('item'));

    }


    public function AddPaymentRecord(Request $resquest){


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'item' => 'required',
            'amount' => 'required',

        ]);


        $payment = new PaymentItem();

        $name = $resquest->input('name');
        $email = $resquest->input('email');
        $item = $resquest->input('item');
        $amount = $resquest->input('amount');




        $payment->name = $name;
        $payment->email = $email;
        $payment->paymentType = $item;
        $payment->amount = $amount;



        if($payment->save()){
            $events = PaymentItem::all();
            return view('home');

        }
    }

    public function AddPaymentRecord2(Request $resquest){


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'item' => 'required',
            'amount' => 'required',

        ]);


        $payment = new PaymentItem();

        $name = $resquest->input('name');
        $email = $resquest->input('email');
        $item = $resquest->input('item');
        $amount = $resquest->input('amount');


        $payment->name = $name;
        $payment->email = $email;
        $payment->paymentType = $item;
        $payment->amount = $amount;


        if($payment->save()){

            $message = "paid To cornerstone Sda Church\nGod Bless You";
            return response()->json(["Response"=>"Success","Amount"=>$message]);

        }else{
            return response()->json(["Response"=>"Failed","Amount"=>"Failed"]);

        }
    }



}
