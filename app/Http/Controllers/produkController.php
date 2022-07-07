<?php

namespace App\Http\Controllers;
use App\Models\produk;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
        return view('produk',[
            "title"=>"Produk",
            "active"=>'produk',
            "produk"=> produk::all()
        ]);
    }
    public function show(produk $produk){
        return view('text',[
            "title"=>"$produk->namaproduk",
            "active"=>'produk',
            "produk"=>$produk
        ]);
    }
    
}
