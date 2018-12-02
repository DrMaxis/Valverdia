<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
class CouponsController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('coupon-code', $request->coupon_code)->first();
        
        if(!$coupon) {
            return redirect()->route('cart')->withErrors('Wrong Coupon Code?');
        }

        session()->put('coupon', [
            'name' => $coupon->coupon_code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('cart')->with('success_message', 'Coupon Applied!');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('cart')->with('success_message', 'Coupon Removed!');

    }
}
