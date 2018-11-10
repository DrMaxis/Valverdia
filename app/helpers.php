<?php
use Carbon\Carbon;

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

function getNumbers() {
    $subtotal = convertToUSD(Cart::subtotal());
    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = ($subtotal - $discount);
    
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);
   return collect([
       'discount' => $discount,
       'code' => $code,
       'newSubtotal' => $newSubtotal,
       'newTax' => $newTax,
       'newTotal' => $newTotal,
       'tax' => $tax,
   ]);
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}

function getStockLevel($quantity) {
    if($quantity > setting('site.stock_threshold')) {
        $stockLevel = 'In Stock';  
      } elseif($quantity <= setting('site.stock_threshold') && $quantity > 0) {
          $stockLevel = 'Low Stock! Get It Soon!'; 
      } else {
          $stockLevel = 'SOLD OUT!!'; 
      }
      return $stockLevel;
}
