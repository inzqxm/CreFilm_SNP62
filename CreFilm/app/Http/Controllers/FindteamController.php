<?php

namespace App\Http\Controllers;

use App\Album;

use App\Position;
use Illuminate\Http\Request;
use App\PostTeam;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Input;

class FindteamController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        $post_teams = PostTeam::all();
        return view('findteam.findteam',compact('positions','post_teams'));
    }

    public function create(){

        return view('findteam.createteam');
    }

    public function show(Request $request){

        if(!empty($request->position_id)){
            $position_search = '';
            foreach($request->position_id as $key => $id){
                if($key != 0){
                    $position_search = $position_search.','.$id;
                }else{
                    $position_search = $id;
                }
            }
        }

        $position_search_explode = explode(',',$position_search);
        foreach($position_search_explode as $key => $id){
            $position_name['name'][$key] = Position::where('id',$id)->first();
        }


        // -----1-----
        $tags = Input::get($position_name);

        $search =  $this->user
                        ->where('position_name', 'LIKE', '%'.Input::get('position_name').'%')
                        ->whereIn( 'position_name', $tags );

        // $this->layout->title   = "Search results";
        // $this->layout->content = view('view.name', $search);

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
