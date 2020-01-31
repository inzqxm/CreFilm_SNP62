<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function index($id)
    {
        //
//        $user = User::all();

//        $users = DB::table('users')
//            ->select('users.*')
//            ->where('users.id','=',$id)
//            ->get();

        $id = User::find(Auth::id());
//        dd($id);
//        $users = Auth::id();
        return view('user.profile',compact('user',$id));
//        dd($users);
    }
    public function show()
    {

    }
}
