<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Position extends Model
{
public function position(){
    return $this->belongsTo('App\Type');
}
}
