<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    use Sluggable;
    protected $fillable = [
        'topic' , 'category' , 'body' , 'status' , 'author' , 'countView' , 'tags' , 'image' , 'description'
    ];
    public function comments()
    {
        return $this->morphMany(comment::class , 'commentable');
    }

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
        $category = BlogCategory::where('id',$id)->first();
        return $category->topic;
    }

    public function author_name($id){
        $author = User::where('id', '=' , $id)->first();
        return $author->name;
    }


}
