<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';
    public $timestamps = false;
    protected $fillable = ['order_id', 'product_id', 'quantity'];
}
