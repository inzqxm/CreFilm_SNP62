<?php

namespace App\Http\Controllers;

use App\Album;

use App\Position;
use App\User;
use Illuminate\Http\Request;
use App\PostTeam;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Input;
use DB;

class FindteamController extends Controller
{
    public function index()
    {
        $positions = Position::all();
//        $user = User::all();
////        dd($positions);
//         $post_team = PostTeam::all();

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
            ->get()->toArray();
//        dd($post_teams);


        return view('findteam.findteam',compact('post_teams','positions'));
    }

    public function create(){

        return view('findteam.createteam');
    }

    public function show(Request $request){

        // dd($request->all());


        if(!empty($request->position_id)){
            $position_search = '';
            foreach($request->position_id as $key => $id){
                if($key != 0){
                    $position_search = $position_search.','.$id;
                }else{
                    $position_search = $id;
                }
            }
            return $position_search;
        }


        $position_search_explode = explode(',',$position_search);
        foreach($position_search_explode as $key => $id){
            $position_name['name'][$key] = Position::where('id',$id)->first();
        }

        return $position_name;



        // -----1-----
        $tags = Input::get($position_name);

        $search =  $this->user
                        ->join('positions','positions.id','=', $position_name)
                        ->where('position_name', 'LIKE', '%'.Input::get('position_name').'%')
                        ->whereIn( 'position_name', $tags );

        $this->layout->title   = "Search results";
        $this->layout->content = view('view.name', $search);

        // -----2-----
        // $search = $request->get('search');
        // // dd($request->all());
        // $search = array();

        // $position = Position::where('position_name','like','%'.$search.'%')
        // ->orwhere('pre_position_id','like','%'.$search.'%')
        // ->orwhere('pro_position_id','like','%'.$search.'%')
        // ->orwhere('post_position_id','like','%'.$search.'%')
        // ->setpath('');


        return $search;

        // return view('findteam.findteam',['positions' => $position,'search']);

    }



}
