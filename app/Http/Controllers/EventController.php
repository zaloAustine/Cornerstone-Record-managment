<?php

namespace App\Http\Controllers;

use App\Event;
use App\Sermon;
use Illuminate\Http\Request;

class EventController extends Controller
{
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

}
