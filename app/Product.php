<?php

namespace App;

<<<<<<< HEAD

=======
>>>>>>> create cart,shop,singleProduct,category Pages
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use Sluggable;

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    protected $fillable = [
        'title', 'description', 'slug', 'price', 'old_price', 'category', 'count', 'size', 'weight', 'discount', 'product_id', 'status', 'image', 'thumbnail',
        'rate'
    ];
<<<<<<< HEAD

=======
>>>>>>> create cart,shop,singleProduct,category Pages
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

<<<<<<< HEAD
    public function category_name($id)
    {
        $category = ProductCategory::where('id', $id)->first();
        if (!$category) {
            return 'بدون دسته بندی';
        } else {
=======
    public function category_name($id){
        $category = ProductCategory::where( 'id' ,$id)->first();
        if(!$category){
            return 'بدون دسته بندی';
        }else
        {
>>>>>>> create cart,shop,singleProduct,category Pages
            return $category->title;
        }
    }

    public function publishedProduct()
    {
        $product = Product::all();
        $published_products = [];
        foreach ($product as $item) {
            if ($item->status == 1) {
                $published_products[] = $item;

            }
        }
        return $published_products;
    }

<<<<<<< HEAD



=======
>>>>>>> create cart,shop,singleProduct,category Pages
}
