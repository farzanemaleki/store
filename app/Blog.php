<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    use Sluggable;
    protected $fillable = [
        'topic' , 'category' , 'body' , 'status' , 'author' , 'countView' , 'tags' , 'image'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'topic'
            ]
        ];
    }
    public function category_name($id)
    {
        $category = ProductCategory::where('id',$id)->first();
        return $category->title;

    }
}
