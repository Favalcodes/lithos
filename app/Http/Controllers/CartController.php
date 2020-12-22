<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $products= $this->listUserCart();
            return view("website.frontend.store.cart", ['products'=> $products]);
        }
        
        // return redirect()->route()->back();
    }

    public function checkout()
    {
        // if (Auth::user()) {
            $products= $this->listUserCart();
            return view("website.frontend.store.checkout", ['products'=> $products]);
        // }
        
        // return redirect()->route()->back();
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
        // return $request;
        $cart= new Cart();
        $cart->user_id= Auth::user()->id;
        $cart->product_id= $request['product_id'];
        $cart->quantity= $request['myNumber'];
        $cart->checked_out= false;
        $cart->save();
        return redirect()->route()->back();
    }


    public function listUserCart(){
        $user_id=Auth::user()->id;
        $products= [];
        $carts= Cart::where('user_id', $user_id)->get();
        foreach($carts as $cart){
            if ($cart->checked_out == false) {
                $product= Product::where('id', $cart->product_id)->first();
                array_push($products, $product);
                
            }
        }

        return $products;
        
    }


    public function addQuantity(Request $request, $cart_id){
        $cart= Cart::where("id", $cart_id)->first();
        $cart->quantity= $request['myNumber'];
        $cart->update();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
