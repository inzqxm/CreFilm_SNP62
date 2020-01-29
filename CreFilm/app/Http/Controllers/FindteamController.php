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
        $search = $request->get('search');
        dd($request->all());
        $search = array();



    }
}
