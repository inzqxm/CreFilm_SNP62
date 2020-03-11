<?php

namespace App\Http\Controllers;

use App\Position;
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

//        $user = User::find($id);
        $positions = Position::all();

        $post_teams = DB::table('post_teams')
            ->select(['post_teams.*',

                'post_teams.pre_position_id',
                'pre_id.position_name as pre_position_name',


                'post_teams.pro_position_id',
                'pro_id.position_name as pro_position_name',

                'post_teams.post_position_id',
                'post_id.position_name as post_position_name',

//                'post_teams.user_id',
                'users.name as user_name',
            ])
            ->leftJoin('positions as pre_id','post_teams.pre_position_id','=','pre_id.id')
            ->leftJoin('positions as pro_id','post_teams.pro_position_id','=','pro_id.id')
            ->leftJoin('positions as post_id','post_teams.post_position_id','=','post_id.id')
            ->leftJoin('users','post_teams.user_id','=','users.id')
            ->where('user_id','=',Auth::id())
            ->get()->toArray();
//        dd($post_teams);


        return view('user.profile',compact('post_teams','positions'));
    }

    public function edit($id)
    {
        $user = User::find(Auth::id());
        return view('user.edit-profile',compact('user'));

    }
    public function update(Request $request, $id)
    {
//        $this->validate($request,[
//            'name'=>'required',
//            'about'=>'required',
////            'img_profile'=>'image|max:1999'
//        ]);
        $filenameWithExt = $request->file('img_profile')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        $extension = $request->file('img_profile')->getClientOriginalName();

        //create new file name
        $filenameToStore = Date('YmdHis').'_'.$extension;

        //upload
        $request->file('img_profile')->move('uploads/img_profile',$filenameToStore);

        $user = User::find(Auth::id());
        $user->name = $request->input('name');
        $user->about = $request->input('about');
        $user->img_profile = $filenameToStore;

        $user->save();

        return redirect('/profile/'.$user->id);
    }



}
