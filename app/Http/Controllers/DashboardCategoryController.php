<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category.index',[
            "category"=>category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
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
            'namakategori' => 'required|max:255',
            'slug' => 'required',
            'image'=>'image'
            
        ]);
        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('category-image');
        }
        category::create($validatedData);
        return redirect("/dashboard/category/")->with('success','Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return view('dashboard.category.show',[
            "kategori" => $category,
            "produk" => produk::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('dashboard.category.edit',[
            "kategori" => $category,
            "produk" => produk::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'namakategori' => 'required|max:255',
            'slug' => 'required',
            'image' => 'image'
            
        ]);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('category-image');
        }
        category::where('id', $id)->update($validatedData);
        return redirect("/dashboard/category/")->with('success','Product has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        if($category->image){
            Storage::delete($category->image);
        }
        category::destroy($category->id);
        return redirect("/dashboard/category")->with('success','Category has been delete');
    }
    
    
}
