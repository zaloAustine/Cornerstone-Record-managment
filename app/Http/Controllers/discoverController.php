<?php

namespace App\Http\Controllers;

use App\discover;
use App\PaymentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class discoverController extends Controller
{
    //

    public function Viewzoom(){
        $discover = discover::where('type',"zoom")->get()->first();
        return response()->json($discover);
    }

    public function ViewBulletin(){
        $discover = discover::where('type',"bulletin")->get()->first();
        return response()->json($discover);
    }



    public function Postzoom(Request $resquest){

        $this->validate(request(), [
            'data' => 'required',

        ]);


        $discover = new discover();
        $data = $resquest->input('data');
        $description = $resquest->input('description');

        $discover->data = $data;
        $discover->type = "zoom";
        $discover->description = $description;


        if($discover->save()){
            $events = PaymentItem::all();
            return view('records', compact('home'));

        }


    }

    public function PostBulletin(Request $request){



        $fileName = null;
        if (request()->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,File::get($cover));

            $discover = new discover();
            $description = $request->input('description');

            $discover->data = $cover->getFilename().'.'.$extension;
            $discover->type = "zoom";
            $discover->description = $description;



            if($discover->save()){
                return view('home');
            }
        }else{

            return view('addBulletin');
        }






    }





}
