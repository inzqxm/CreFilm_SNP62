<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserJoinController extends Controller
{
    public function index(Request $request){

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

}
