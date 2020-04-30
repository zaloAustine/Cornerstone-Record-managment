<?php

namespace App\Http\Controllers;

use App\Event;
use App\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    //
    public function allSermons(){
        $sermons = Event::all();
        return response()->json($sermons);

    }

    public function postSermons(){
        $sermon = new Sermon();

        $sermon->Topic = "" ;
        $sermon->description = "";
        $sermon->audoUrl = "" ;
        $sermon->pastor = "";

        $sermon->save();
        return response()->json(["Response"=>'Succsess']);

    }
}
