<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use Sluggable;

    protected $table = 'blog_category';
    protected $fillable = [
        'topic', 'parent_id', 'body', 'thumbnail', 'status', 'image'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'topic'
            ]
        ];
    }

    public function count_blog($id){
        $allBlog = Blog::where('category' , '=' , $id)->get();
        return $allBlog->count();
    }
}
