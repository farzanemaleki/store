<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = ['user_id' , 'user_address'];

    public function user(){
        return $this->belongsTo(user::class , 'user_id' ,'id');
    }
}
