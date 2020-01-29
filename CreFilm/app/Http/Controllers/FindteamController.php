<?php

namespace App\Http\Controllers;

use App\Album;

use App\Position;
use Illuminate\Http\Request;

class FindteamController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('findteam.findteam',compact('positions'));
    }

    public function create(){

        return view('findteam.createteam');
    }

    public function show(Request $request){
        // Request $request
        $search = $request->get('search');
        // dd($request->all());
        $search = array();

        $position = Position::where('position_name','like','%'.$search.'%')
        ->orwhere('pre_position_id','like','%'.$search.'%')
        ->orwhere('pro_position_id','like','%'.$search.'%')
        ->orwhere('post_position_id','like','%'.$search.'%')
        ->setpath('');

        return view('findteam.findteam',['positions' => $position,'search']);

    }
}
