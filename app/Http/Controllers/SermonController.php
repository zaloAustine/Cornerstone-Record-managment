<?php

namespace App\Http\Controllers;

use App\Event;
use App\Item;
use App\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SermonController extends Controller
{
    //
    public function allSermons(){
        $sermons = Sermon::all();
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

    public function UploadSermon(Request $request)
    {


        $this->validate(request(), [
            'description' => 'required',
            'file' => 'required|max:5000'
        ]);



        $fileName = null;
        if (request()->hasFile('file')) {

            $cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,File::get($cover));
        }


        $sermon = new Sermon();
        $sermon->description = $request->input('description');
        $sermon->pastor = $request->input('Pastor');
        $sermon->Topic = $request->input('Topic');
        $sermon->audoUrl = $cover->getFilename().'.'.$extension;


        if($sermon->save()){
            $sermons = Sermon::all();
            return view('sermons', compact('sermons'));

        }

    }


    public function allItems(){
        $item = Item::all();
        return response()->json($item);
    }
}
