<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = "customers";
    protected $primaryKey ="customer_id";

    //data set......(accessor)
    public function setNameAttribute($value){
       $this->attributes['name'] = ucwords($value);
    }

    //data get.....(mutator)
    public function setDobAttribute($value){
        return date("d-M-Y" , strtotime($value));
     }
}
