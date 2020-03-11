<?php

namespace App\Http\Controllers;

use App\Position;
use App\PostTeam;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $positions = Position::all();
        $post_team = DB::table('post_teams')
            ->select('post_teams.*',

                'users.name as user_name',

                'post_teams.pre_position_id',
                'pre_id.position_name as pre_position_name',


                'post_teams.pro_position_id',
                'pro_id.position_name as pro_position_name',

                'post_teams.post_position_id',
                'post_id.position_name as post_position_name')

            ->where('post_teams.id','=',$id)
            ->join('users','post_teams.user_id','=','users.id')
            ->join('positions as pre_id','post_teams.pre_position_id','=','pre_id.id')
            ->join('positions as pro_id','post_teams.pro_position_id','=','pro_id.id')
            ->join('positions as post_id','post_teams.post_position_id','=','post_id.id')
            ->first();

//        $filenameWithExt = $request->file('img_head')->getClientOriginalName();
//        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
//
//        $extension = $request->file('img_head')->getClientOriginalName();
//
//        //create new file name
//        $filenameToStore = Date('YmdHis').'_'.$extension;
//
//        //upload
//        $request->file('img_head')->move('uploads/covers_team',$filenameToStore);
        $positions = [];
        $prices = [];
        $persons = [];
        if(!empty($post_team->pre_position_id)) {
            $ex = explode(',',$post_team->pre_position_id);
            $ex_bg = explode(',',$post_team->pre_budget);
            $ex_ps = explode(',',$post_team->pre_person);
            if(!empty($ex)) {
                foreach($ex as $index=>$e) {
                    $positions[] = $e;
                    if(!empty($ex_bg)) {
                        $prices[$e] = $ex_bg[$index];
                    }
                    if(!empty($ex_ps)) {
                        $persons[$e] = $ex_ps[$index];
                    }
                }
            }

        }

        if(!empty($post_team->pro_position_id)) {
            $ex = explode(',',$post_team->pro_position_id);
            $ex_bg = explode(',',$post_team->pro_budget);
            $ex_ps = explode(',',$post_team->pro_person);
            if(!empty($ex)) {
                foreach($ex as $index=>$e) {
                    $positions[] = $e;
                    if(!empty($ex_bg)) {
                        $prices[$e] = $ex_bg[$index];
                    }
                    if(!empty($ex_ps)) {
                        $persons[$e] = $ex_ps[$index];
                    }
                }
            }
        }
        if(!empty($post_team->post_position_id)) {
            $ex = explode(',',$post_team->post_position_id);
            $ex_bg = explode(',',$post_team->post_budget);
            $ex_ps = explode(',',$post_team->post_person);
            if(!empty($ex)) {
                foreach($ex as $index=>$e) {
                    $positions[] = $e;
                    if(!empty($ex_bg)) {
                        $prices[$e] = $ex_bg[$index];
                    }
                    if(!empty($ex_ps)) {
                        $persons[$e] = $ex_ps[$index];
                    }
                }
            }
        }

        $result_positions = DB::table('positions')->whereIn('id',$positions)->get();



    //    dd($post_teams);
        return view('findteam.detail',compact('post_team','positions','result_positions','prices','persons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function join($request)
    {
        $team_id = $request->post_fw_id;

        dd($team_id);

        if (!empty($team_id)) {
            $user_id = Auth::id();
            $user_joins =  DB::table('join_teams')->where('user_id',$user_id)->first();
            if (empty($user_joins)) {
                $joins = [$team_id];
                $joins = json_encode($joins);
                DB::table('join_teams')->insert(['user_id'=>$user_id,'joins_id'=>$joins,'created_at'=>Date('Y-m-d H:i:s')]);
            }
            else {
                $joins = json_decode($user_joins->joins_id,TRUE);
                if (!in_array($team_id, $joins)) {
                    $joins[] = $team_id;
                }
                $joins = json_encode($joins);
                DB::table('join_teams')->where('user_id',$user_id)->update(['joins_id'=>$joins,'updated_at'=>Date('Y-m-d H:i:s')]);
            }

            return response([
                'type'=>'refresh',
                'message'=>'join success'
            ],200);

        }
    }

    public function destroy(Team $team)
    {
        //
    }
}
