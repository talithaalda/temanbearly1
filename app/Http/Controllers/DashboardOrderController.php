<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\checkout;
use App\Models\detail_order;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.order.index', [
            "order"=> detail_order::all(),
            "checkout"=> checkout::all()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($checkout)
    {
        return view('dashboard.order.show',[
            "checkout" => checkout::find($checkout),
            "order"=> detail_order::all(),
            'title'=>'Order',
            'active'=>'order',
        ]);
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
        $validatedData = $request->validate([
            'status' => 'required'
        ]);
    
        checkout::where('id', $id)->update($validatedData);
        return redirect("/dashboard/orders");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($checkout)
    {   
        if(checkout::find($checkout)->nota){
            Storage::delete(checkout::find($checkout)->nota);
        }
        detail_order::where('checkout_id', $checkout)->delete();
        checkout::destroy($checkout);
        return redirect("/dashboard/orders")->with('success','Order has been deleted');
    }
}
