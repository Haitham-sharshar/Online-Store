<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'product_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
