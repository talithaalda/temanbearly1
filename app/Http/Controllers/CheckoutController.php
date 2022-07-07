<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\cart;
use App\Models\detail_order;
use App\Http\Requests\StorecheckoutRequest;
use App\Http\Requests\UpdatecheckoutRequest;
use App\Models\City;
use App\Models\Courier;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
// use Kavist\RajaOngkir\Facades\RajaOngkir;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $city = City::find(auth()->user()->city);
        // $daftarProvinsi = RajaOngkir::ongkosKirim([
        //     'origin'        => $city->city_id,     // ID kota/kabupaten asal
        //     'destination'   => 444,      // ID kota/kabupaten tujuan
        //     'weight'        => 30,    // berat barang dalam gram
        //     'courier'       => 'jne',
        //     'originType'       => 'city',
        //     'destinationType'  => 'city'   
        // ])->get();

        return view('checkout.form',[
            'title'=>'Checkout',
            'active'=>'checkout',
            "cart"=>cart::all(),
            "checkout"=>checkout::all()
            // "ongkir"=>$daftarProvinsi[0]['costs'][0]['cost'][0]['value']
        ]);
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
     * @param  \App\Http\Requests\StorecheckoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecheckoutRequest $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'methodpay'=> 'required',
            'total'=> 'required',
            'total_item'=>'required',
            // 'ongkir'=>'required',
            'status'=>'required'
        ]);
        if(str_contains($validatedData['total'], ".")){
            $validatedData['total']=str_replace(".", "", $validatedData['total']);;
        }
        // if(str_contains($validatedData['ongkir'], ".")){
        //     $validatedData['ongkir']=str_replace(".", "", $validatedData['ongkir']);;
        // }
        $order =checkout::create($validatedData);
        $coID = $order->id;
        

        $validatedData1 = $request->validate([
            'user_id' => 'required',
            'produk_id'=> 'required',
            'checkout_id'=>'nullable',
            'quantity'=>'nullable',
        ]);
        $validatedData1['checkout_id']=$coID;
        $co_id=$validatedData1['checkout_id'];
        foreach(auth()->user()->cart as $c){
            $validatedData1['produk_id'] = $c->produk_id;
            $validatedData1['quantity'] = $c->quantity;
            detail_order::create($validatedData1);
        }
        cart::destroy(auth()->user()->cart);
        return redirect("/confirm/$co_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecheckoutRequest  $request
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecheckoutRequest $request, $id)
    {
        $validatedData = $request->validate([
            'nota' => 'required',
            'status' => 'required'
        ]);
        if($request->file('nota')){
            $validatedData['nota']=$request->file('nota')->store('nota');
        }
        checkout::where('id', $id)->update($validatedData);
        return redirect("/thanksorder");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkout $checkout)
    {
        //
    }
}
