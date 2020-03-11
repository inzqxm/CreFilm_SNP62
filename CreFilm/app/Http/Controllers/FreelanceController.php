<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class FreelanceController extends Controller
{
    //
    public function index()
    {
       $users = User::all();
//       dd($users);

       return view('freelance.freelance',compact('users'));
    }

}
