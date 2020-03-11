<?php

namespace App\Http\Controllers;

use App\EventJoin;
use App\Utils\ErrorHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CheckController extends Controller
{
    public function index() {

        $joins  = json_encode($joins);

        $user_joins =  DB::table('event_joins')->where('user_id',$user_id)->first();
        if (empty($user_joins)) {
            DB::table('event_joins')->insert(['user_id'=>$user_id,'joins_id'=>$joins,'created_at'=>Date('Y-m-d H:i:s')]);
        } else {
            DB::table('event_joins')->where('user_id',$user_id)->update(['joins_id'=>$joins,'updated_at'=>Date('Y-m-d H:i:s')]);
        }
    }

    public function check() {
        $user_joins =  DB::table('event_joins')->where('user_id',$user_id)->first();
        if (!empty($user_joins)) {

            $joins = json_decode($user_joins->joins_id,TRUE);
            $current_join = array_search($page,$joins);
            if ($current_join==true) {
                  dd('is join');
            }else {
                dd("dont join");
            }
        }

    }
}
