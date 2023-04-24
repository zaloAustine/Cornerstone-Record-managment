<?php

namespace App\Http\Controllers;

use App\PaymentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sum = PaymentItem::all()->sum('amount');
        $tithe= PaymentItem::where("paymentType","God's Tithe")->sum('amount');
        $offeringCombined = PaymentItem::where("paymentType","Combined Offering")->sum('amount');
        $CampOffering = PaymentItem::where("paymentType","Camp Offering")->sum('amount');
        $CampExpense = PaymentItem::where("paymentType","Camp Expense")->sum('amount');
        $ChurchDevelopment = PaymentItem::where("paymentType","Church Developmentg")->sum('amount');
        $Benovelence = PaymentItem::where("paymentType","Benovelence")->sum('amount');
        $AMO = PaymentItem::where("paymentType","AMO")->sum('amount');
        $AWO = PaymentItem::where("paymentType","AWO")->sum('amount');
        $Youth = PaymentItem::where("paymentType","Youth ")->sum('amount');
        $Children = PaymentItem::where("paymentType","Children")->sum('amount');
        $StationFund = PaymentItem::where("paymentType","Station Fund ")->sum('amount');
        $Mission = PaymentItem::where("paymentType","Mission")->sum('amount');
        $GoodSamaritan = PaymentItem::where("paymentType","Good Samaritan")->sum('amount');
        $ThanksGiving = PaymentItem::where("paymentType","Thanks Giving")->sum('amount');
        $Ambassadors = PaymentItem::where("paymentType","Ambassadors")->sum('amount');
        $Pathfinders = PaymentItem::where("paymentType","Pathfinders")->sum('amount');
        $LocalChurchBudget = PaymentItem::where("paymentType","Local Church Budget")->sum('amount');
        $Others = PaymentItem::where("paymentType","Others")->sum('amount');


        // $post = DB::table('payment_items')->get('*')->toArray();
          $post = PaymentItem::all();
    
           foreach($post as $row)
            {
               $data[] = array
                (
                 "label"=>$row->paymentType,
                 "y"=>$row->amount
                ); 
            }

        
        return view('home', compact('sum','tithe','offeringCombined','data'));
    }
}
