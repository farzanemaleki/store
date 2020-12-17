<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use Sluggable;

    public function product(){
        return $this->hasMany(Product::class);
    }

    protected $table = 'productcategory';

    protected $fillable = [
        'title','slug','description','parent_id','status','image'
    ];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function parent_name($id){
        $parent_name = ProductCategory::where( 'id' , $id )->first();
        if (!$parent_name)
        {
            return 'دسته بندی مادر';
        }else
        {
            $parent_name = $parent_name->title;
            return $parent_name;
        }

    }
    public function countsProducts($id)
    {
        $allpro =Product::where( 'category' , '=' , $id )->get();
        return $allpro->count();
    }
}
