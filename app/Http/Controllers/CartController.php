<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\cart;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use App\Models\produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart',[
            "title"=>"Cart",
            "produk"=>produk::all(),
            "cart"=>cart::all(),
            "active"=>'cart'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {
        $validatedData = $request->validate([
            'namaproduk' => 'required|max:255',
            'harga'=> 'required',
            'quantity'=> 'required',
            'user_id'=>'required',
            'produk_id'=>'required',
            'username'=>'required',
            'image'=>'required'
        ]);
        // if(str_contains($validatedData['harga'], ".")){
        //     $validatedData['harga']=str_replace(".", "", $validatedData['harga']);;
        // }
        // if($request->file('image')){
        //     $validatedData['image']=$request->file('image')->store('cart-image');
        // }
        cart::create($validatedData);
        return redirect("/produk/$request->slug")->with('success','Item has been added to cart');
        // return redirect("/cart")->with('success','Product has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        cart::destroy($cart->id);
        return redirect("/cart")->with('success','Item has been delete');
    }
    public function destroyAll()
    {
        cart::destroy(auth()->user()->cart);
        return redirect("/cart")->with('success','All item has been delete');
    }
}
