<?php

namespace App\Http\Controllers;

use App\Position;
use App\PostTeam;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $positions = Position::all();
//        $user = User::all();
////        dd($positions);
//         $post_team = PostTeam::all();

        $post_teams = \DB::table('post_teams')
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
            ->orderBy('post_teams.id', 'DESC')
            ->limit(3)
            ->get()->toArray();

//        $post_teams = PostTeamCollection::collection(DB::table('post_teams')->get());

//        dd($post_teams);
//        return PostTeamCollection::collection(DB::table('post_teams')->get());

//
        return view('index',compact('post_teams','positions'));
    }
}
