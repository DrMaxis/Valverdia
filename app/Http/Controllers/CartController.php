<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;
use App\Color;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {
        
       return view('cart')->with([
        'discount' => $this->getData()->get('discount'),
        'newSubtotal' => $this->getData()->get('newSubtotal'),
        'newTax' => $this->getData()->get('newTax'),
        'newTotal' => $this->getData()->get('newTotal'),
       ]);;
    }


 /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request) {


        if($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('You do not have access to this!');
        }


        $dupes = Cart::search(function($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($dupes->isNotEmpty()) {
            return redirect()->route('cart')->with('success_message', 'This item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
        ->associate('App\Product');
         // Inventory check
         $this->decreaseQuantities();

        return back()->with('success_message', 'Item was added to your cart!');
        
    } 


       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'

        ]);

        if($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
         return response()->json(['success' => false], 400);
        }

        if($request->quanity > $request->productQuanity) {
            session()->flash('errors', collect(['Item went out of stock!']));
            return response()->json(['success' => false], 400);
        }


         Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity updated!');
         return response()->json(['success' => true]);
     }

     private function getData() {
        $subtotal = convertToUSD(Cart::subtotal());
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = ($subtotal - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
       return collect([
           'discount' => $discount,
           'newSubtotal' => $newSubtotal,
           'newTax' => $newTax,
           'newTotal' => $newTotal,
       ]);
    }

    protected function decreaseQuantities() {
        foreach(Cart::content() as $item) {
            $product = Product::find($item->model->id);
            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable() {
        foreach(Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }

}
