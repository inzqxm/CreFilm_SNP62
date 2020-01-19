<?php

namespace App\Http\Controllers;

use App\Album;

use Illuminate\Http\Request;

class FindteamController extends Controller
{
    //
    public function index(){
//        $findteam = Album::with('photos')->get();
//        $findteam = Album::with('photos')->get();

//        return view('findteam.index',compact('albums'));
        return view('findteam.index');

    }

    public function create(){
        return view('findteam.create');
    }
    public function store(Request $request){
        dd($request->all());
//        $this->validate($request,[
//            'name'=>'required',
//            'description'=>'required',
////            'categories_id',
//            'min_budget' => 'required',
//            'max_budget'=>'required',
//        ]);


//        //get file extension
//        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
//
////        get file name
//        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
//
////        get extension
//        $extension = $request->file('cover_image')->getClientOriginalExtension();
//
////        create new file name
//        $filenameToStore = $filename.''.time().'.'.$extension;
//        $filenameToStore = Date('YmdHis').'_'.$filename.'.'.$extension;
//
//
////         upload image
//        $request->file('cover_image')->move('uploads/album_covers',$filenameToStore);

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
////        $album->cover_image = $request;
//        $album->categories_id = $request;
        $album->min_budget = $request->input('min_budget');
        $album->max_budget = $request->input('max_budget');
//
        $album->save();
//
        return redirect('/teamwork')->with('success','Album created');



    }
    public function show($id){
        // SELECT * FROM photo WHERE album_id = $id



        $album = Album::with('photos')->find($id);

        return view('albums.show',compact('album'));

    }
}
