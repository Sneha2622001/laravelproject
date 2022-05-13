<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $primaryKey = "group_id";

    function member(){
        return $this->hasMany('App\Models\Group' , 'group_id' , 'group_id');
    }

}
