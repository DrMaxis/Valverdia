<?php

function convertToUSD($price)
{
    return number_format((float)$price, 2);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path) {
return  $path != null && file_exists('storage/'.$path) ? asset('storage/'.$path) :  asset('storage/assets/imgs/no-img.jpg');
}
