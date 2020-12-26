<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function details ()
    {
        return $this->hasMany(OrderDetails::class,'order_id');
    }
    public function getTotalPriceAttribute()
    {
        $items = $this->details;
        $total = 0;
        foreach ($items as $item){
            $total += $item->price * $item->quantity ;
        }
        return $total;
    }
}
