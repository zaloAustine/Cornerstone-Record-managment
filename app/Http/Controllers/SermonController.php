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

        $sermon->Topic = "Sample Topic" ;
        $sermon->description = "Sample topic description";
        $sermon->audoUrl = "Sample Audio Url" ;
        $sermon->pastor = "Pastor";

        $sermon->save();
        return response()->json(["Response"=>'Succsess']);

    }

    public function index(){
        $sermons = Sermon::all();
        return view('sermons', compact('sermons'));
    }


    public function addSermon(){
        return view('addsermons');

    }
}
