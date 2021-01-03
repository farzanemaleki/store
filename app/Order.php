<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable  = [
        'user_id' , 'product_id' , 'product_name' , 'product_count' , 'product_price' , 'delivery_address_id', 'amount' ,
        'discount' , 'postal_code',
        'description' , 'company_name'
    ];
}
