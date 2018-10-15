<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products';

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
    
    public function convertToUSD() {
        return '$' . number_format($this->price, 2);
    }


}
