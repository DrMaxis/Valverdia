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
        
        return view('cart');
    }


 /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request) {

        $dupes = Cart::search(function($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($dupes->isNotEmpty()) {
            return redirect()->route('cart')->with('success_message', 'This item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
        ->associate('App\Product');

        return redirect()->route('cart')->with('success_message', 'Item was added to your cart!');
        
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


         Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity updated!');
         return response()->json(['success' => true]);
     }

}
