<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productAttribiutes extends Model
{
    protected $fillable = [
      'product_id' , 'key' , 'value'
    ];

    public function product_name($id)
    {
        $product = Product::where('id',$id)->first();
            return $product->title;
    }
}
