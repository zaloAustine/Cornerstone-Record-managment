<?php

namespace App\Http\Controllers;

use App\Item;
use App\PaymentItem;
use App\Sermon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;
use Mail;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\DB;
use App\Notifications\test;
use Illuminate\Support\Facades\Notification;

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

        Notification::route('mail', $email)
        ->route('nexmo', '5555555555')
        ->notify(new test($amount));

        // $this->sendMiail($payment->email,array('values' => array("amount"=>$amount)));

        if($payment->save()){
            $events = PaymentItem::all();
            return view('home');

        }
    }

    public function sendMiail($email,$data)
    {
     
        Mail::to($email)->send(new NotifyMail($data));

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
    public function showStatics()
    {
       $post = DB::table('payment_items')->get('*')->toArray();
       foreach($post as $row)
        {
           $data[] = array
            (
             "label"=>$row->paymentType,
             "y"=>$row->amount
            ); 
        }

       return view('home',['data' => $data]);
    }
}
