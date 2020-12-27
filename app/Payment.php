<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
        protected $fillable = [
          'order_id' , 'amount' , 'RefID' , 'card_pan' , 'status'
        ];
}
