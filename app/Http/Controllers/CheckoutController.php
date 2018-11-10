<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Product;
use App\Color;
use App\Order;
use App\OrderProduct;
use App\Http\Requests\CheckoutRequest;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
      

        if(auth()->user() && request()->is('guestcheckout')) {
            return redirect()->route('checkout');
        }

       return view('checkout')->with([
           'discount' => $this->getNumbers()->get('discount'),
           'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
           'newTax' => $this->getNumbers()->get('newTax'),
           'newTotal' => $this->getNumbers()->get('newTotal'),
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
    public function store(CheckoutRequest $request)
    {

        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.','.$item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => $this->getNumbers()->get('newTotal'),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

            //Success

          
            $order = $this->addToOrdersTables($request, null);
            Cart::instance('default')->destroy();
            session()->forget('coupon');

        return redirect()->route('confirm-purchase')->with('success_message', 'Thank You! Your Order Has Been Placed!');

    } catch (CardErrorException $e) {
        $this->addToOrdersTables($request, $e->getMessage());
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



    protected function addToOrdersTables($request, $error) {

          // insert into order table 
$order = new Order;
          $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
        'billing_email' => $request->email,
        'billing_name' => $request->name,
        'billing_address' => $request->address,
        'billing_city' => $request->city,
        'billing_state' => $request->state,
        'billing_zip' => $request->zip,
        'billing_phone' => $request->phone,
        'billing_name_on_card' => $request->name_on_card,
        'billing_discount' => getNumbers()->get('discount'),
        'billing_discount_code' => getNumbers()->get('code'),
        'billing_subtotal' => getNumbers()->get('newSubtotal'),
        'billing_tax' => getNumbers()->get('newTax'),
        'billing_total' => getNumbers()->get('newTotal'),
        'error' => null,
        ]);

//then order_product table

            foreach(Cart::content() as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
            }
            return $order;
    }    
    



    private function getNumbers() {
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
    
   
}
