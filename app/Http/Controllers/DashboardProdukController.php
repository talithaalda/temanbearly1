<?php

namespace App\Http\Controllers;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\produk;
use App\Models\category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.produk.index', [
            "produk" => produk::all ()
        ]);
    }
    
    public function show(produk $produk){
        return view('dashboard.produk.show',[
            "produk" => $produk
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produk.create',[
            'category'=>category::all(),
            'produk'=>produk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'namaproduk' => 'required|max:255',
            'slug' => 'required',
            'category_id'=> 'required',
            'merk'=> 'required',
            'harga'=> 'required',
            'deskripsi'=> 'required',
            'stok'=> 'required',
            'image'=>'image'
        ]);
        if(str_contains($validatedData['harga'], ".")){
            $validatedData['harga']=str_replace(".", "", $validatedData['harga']);
        }
        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('produk-image');
        }
        produk::create($validatedData);
        return redirect("/dashboard/products/")->with('success','Product has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        return view('dashboard.produk.edit',[
            'category'=>category::all(),
            "produk"=>$produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'namaproduk' => 'required|max:255',
            'slug' => 'required',
            'category_id'=> 'required',
            'merk'=> 'required',
            'harga'=> 'required',
            'deskripsi'=> 'required',
            'stok'=> 'required',
            'image'=>'image'
        ]);
        if(str_contains($validatedData['harga'], ".")){
            $validatedData['harga']=str_replace(".", "", $validatedData['harga']);;
        }
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('produk-image');
        }
        produk::where('id', $id)->update($validatedData);
        return redirect("/dashboard/products/edit/$request->slug")->with('success','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        if($produk->image){
            Storage::delete($produk->image);
        }
        produk::destroy($produk->id);
        return redirect("/dashboard/products")->with('success','Product has been delete');
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(produk::class, 'slug', $request->namaproduk);
        return response()->json(['slug'=>$slug]);
    }
    
}
