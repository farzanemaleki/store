<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'title' , 'link1' ,'Address_link1' , 'link2' , 'Address_link2' , 'link3' , 'Address_link3' ,
        'link4' , 'Address_link4' , 'link5' , 'Address_link5'
    ];
}
