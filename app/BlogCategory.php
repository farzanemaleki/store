<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';
    protected $fillable = [
        'topic' , 'parent_id' , 'body' , 'thumbnail' , 'status' , 'image'
    ];
}
