<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class  , 'category' , 'id');
    }

    public function comments()
    {
        return $this->morphMany(comment::class , 'commentable');
    }

    protected $fillable =[
        'title', 'description', 'size', 'price', 'old_price' , 'discount' , 'category' , 'rate' , 'weight' , 'count' ,
        'image' , 'thumbnail' , 'product_id' ,
        'status'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category_name($id)
    {
        $category = ProductCategory::where('id' , '='  ,$id)->first();
            return $category->title;
    }

    public function publishedProduct()
    {
        $products = Product::all();
        $published_products = [];
        foreach ($products as $pro){
            if ($pro->status == 1){
                $published_products [] = $pro;
            }
        }
        return $published_products;
    }

    public function more_product($id)
    {
        $randomMoreProducts = Product::where('category', '=', $id)->inRandomOrder(8)->get();
        return $randomMoreProducts ;
    }

    public function path(){
        return "/product/$this->id";
    }

}
