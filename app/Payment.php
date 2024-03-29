<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
        protected $fillable = [
          'user_id' , 'user_address_id' , 'order_id' , 'amount' , 'RefID' , 'card_pan' , 'status'
        ];
        public function user(){
            return $this->belongsTo(User::class, 'user_id' , 'id');
        }
        public function order(){
            return $this->belongsTo(Order::class , 'order_id' , 'id');
        }

        public function address(){
            return $this->belongsTo(Address::class , 'user_address_id' , 'id');
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
}
