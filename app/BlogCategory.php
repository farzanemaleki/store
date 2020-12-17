<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'topic' , 'parent_id' , 'body' , 'thumbnail' , 'status' , 'image'
    ];
}
