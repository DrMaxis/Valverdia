<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Product;
use App\Color;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
       return view('checkout')->with([
           'discount' => $discount,
           'newSubtotal' => $newSubtotal,
           'newTax' => $newTax,
           'newTotal' => $newTotal,
       ]);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function confirm() {
         if (! session()->has('success_message')) {
            return redirect('/');
         }

         return view('thankyou');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.','.$item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count()
                ],
            ]);

            //Success

            Cart:: instance('default')->destroy();

        return redirect()->route('confirm-purchase')->with('success_message', 'Thank You! Your Order Has Been Placed!');
    } catch (CardErrorException $e) {
        return back()->withErrores('Error '. $e->getMessage());
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
