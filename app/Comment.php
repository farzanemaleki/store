<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        'user_id' , 'comment_body' , 'confirmed' , 'commentable_id' , 'commentable_type' , 'parent_id'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class  , 'user_id' , 'id');
    }
    public function diffForHumans($time) {
//        $get_en = \Carbon::createFromTimeStamp( $time )->diffForHumans();
        $get_en = $time->diffForHumans();
        $set_fa = str_replace('years','سال',$get_en);
        $set_fa = str_replace('months','ماه',$set_fa);
        $set_fa = str_replace('weeks','هفته',$set_fa);
        $set_fa = str_replace('days','روز',$set_fa);
        $set_fa = str_replace('hours','ساعت',$set_fa);
        $set_fa = str_replace('minutes','دقیقه',$set_fa);
        $set_fa = str_replace('seconds','ثانیه',$set_fa);
        $set_fa = str_replace('year','سال',$set_fa);
        $set_fa = str_replace('month','ماه',$set_fa);
        $set_fa = str_replace('day','روز',$set_fa);
        $set_fa = str_replace('week','هفته',$set_fa);
        $set_fa = str_replace('hour','ساعت',$set_fa);
        $set_fa = str_replace('minute','دقیقه',$set_fa);
        $set_fa = str_replace('second','ثانیه',$set_fa);
        $set_fa = str_replace('ago','پیش',$set_fa);
        $set_fa = str_replace('after','بعد',$set_fa);
        $set_fa = str_replace('before','قبل',$set_fa);
        $set_fa = str_replace('from now','بعد',$set_fa);

        return $set_fa;
    }

    public function setCommentBodyAttribute($value)
    {
        $this->attributes['comment_body'] = str_replace(PHP_EOL, '<br>' , $value);
    }

    public function comments(){
        return $this->hasMany(Comment::class , 'parent_id' , 'id')->where('confirmed' , '=' , 1);

    }

    public function commentType($str){

        if ($str == 'App\Product'){
            return str_replace('App\Product' , 'دسته محصولات' , 'App\Product');
        }else{
            return str_replace('App\Blog' , 'دسته بلاگ' , 'App\Product');
        }
    }
}
