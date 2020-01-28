<?php

namespace App\Http\Controllers;

use App\Album;

use Illuminate\Http\Request;

class FindteamController extends Controller
{
    public function index()
    {
        return view('findteam.findteam');
    }

    public function create(){

        return view('findteam.createteam');
    }
}
