<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    
    //protected $table = 'products';
    protected $fillable = ['quantity'];
    public $timestamps = false;
    public function categories() {
        return $this->belongsToMany('App\Category');
    }
    
    public function convertToUSD() {
        return '$' . number_format($this->price, 2);
    }


}
