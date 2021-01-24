<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name' , 'manager_name' , 'phone' , 'address' , 'email' , 'logo'
    ];
}
