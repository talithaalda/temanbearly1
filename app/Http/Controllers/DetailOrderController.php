<?php

namespace App\Http\Controllers;

use App\Models\detail_order;
use App\Http\Requests\Storedetail_orderRequest;
use App\Http\Requests\Updatedetail_orderRequest;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storedetail_orderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_orderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function show(detail_order $detail_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_order $detail_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_orderRequest  $request
     * @param  \App\Models\detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetail_orderRequest $request, detail_order $detail_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_order  $detail_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_order $detail_order)
    {
        //
    }
}
