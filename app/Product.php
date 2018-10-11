<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function convertToUSD() {
        return '$' . number_format($this->price, 2);
    }
}
