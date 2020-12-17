<?php

namespace App;

<<<<<<< HEAD
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

=======
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductCategory extends Model
{
<<<<<<< HEAD
    use Sluggable;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $table = 'ProductCategory';

    protected $fillable = [
        'title', 'description' , 'parent_id' , 'image' , 'status'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function parent_name($id)
    {
        $parent_name = ProductCategory::where('id', $id)->first();
        if (!$parent_name) {
            return 'دسته بندی مادر';
        } else {
            $parent_name = $parent_name->title;
            return $parent_name;
        }

    }

    public function countsProducts($id)
    {
        $allpro = Product::where('category', '=', $id)->get();
        return $allpro->count();
    }

=======
    //
>>>>>>> origin/master
>>>>>>> c0a5a9f384955196b200fb275c7a0c937da3cd41
}
