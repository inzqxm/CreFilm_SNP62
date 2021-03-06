<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTeam extends Model
{
    protected $table = 'post_teams';
    protected $fillable = [
        'name' ,
        'status' ,
        'detail' ,
        'start_date' ,
        'end_date',
        'pre_position_id',
        'pre_person',
        'pre_budget' ,
        'pro_person' ,
        'pro_budget' ,
        'pro_position_id' ,
        'post_position_id' ,
        'post_person' ,
        'post_budget' ,
        'img_head' ,
        'user_id'
    ];

    public function post_team(){
        return $this->belongsTo('App\PostTeam');
    }
}
