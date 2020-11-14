<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productAttribiutes extends Model
{
    protected $fillable = [
      'product_id' , 'key' , 'value'
    ];
}
