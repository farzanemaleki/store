<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
//    use Sluggable;

    public function productcategory(){
        return $this->belongsTo(ProductCategory::class);
    }

    protected $fillable = [
        'title','description','slug','price','old_price','category','count','size','weight','discount','product_id','status','image','thumbnail',
        'rate'
    ];
    public function slugable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category_name($id){
        $category_name = ProductCategory::where( 'id' ,$id)->first();
        if(!$category_name){
            return 'بدون دسته بندی';
        }else
        {
            $category_name = $category_name->title;
            return $category_name;
        }
    }

    public function publishedProduct(){
        $product = Product::all();
        $published_products = [];
        foreach($product as $item){
            if($item->status == 1){
                $published_products[] = $item ;

            }
        }
    return $published_products;
    }


}
