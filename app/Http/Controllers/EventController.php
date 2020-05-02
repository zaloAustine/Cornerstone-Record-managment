<?php

namespace App\Http\Controllers;

use App\Event;
use App\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function index(){
        $events = Event::all();
        return view('events', compact('events'));
    }
    //
    public function allEvents(){
        $event = Event::all();
        return response()->json($event);
    }

    public function postEvents(){

            $sermon = new Event();
            $sermon->description = "zalo" ;

            $imageUrl = array('x', 'y', 'z');

        $data = [];
        foreach($imageUrl as $seat_id) {
            $data[] = [
                'image' => $seat_id,
            ];
        }

            $sermon->imageUrls = json_encode($data,JSON_UNESCAPED_SLASHES);

            $sermon->save();
            return response()->json(["Response"=>'Succsess']);

        }

    public function addEvent(){
        return view('addevents');

    }




    public function UploadImage(Request $request)
    {

        $this->validate(request(), [
            'description' => 'required',
            'file' => 'required|image|mimes:jpg,jpeg,png,gif|max:5000'
        ]);

        $fileName = null;
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $request->file->move(public_path('images'), $fileName);


            $event = new Event();
            $event->description = $request->input('description');
            $event->imageUrls = $fileName;

            if($event->save()){

                $events = Event::all();
                return view('events', compact('events'));

                 }
            }



    }

}
