<link rel="stylesheet" href="{{ asset("cs/main.css") }}">
<!-- custom js -->
<link rel="stylesheet" href="{{ asset("js/script.js") }}">
@extends('layouts.main')

@section('container')
<h1>d</h1>
<h1>&emsp;</h1>

    @if(session()->has('success'))
		<div class="alert alert-success" role="alert">
		  {{ session('success') }}
		</div>
	@endif
        
<br>
<form method="post" action="/cart" enctype="multipart/form-data">
    @csrf
<div class="container ">
    <div class="card border-0 ">
        <div class="container-fluid ">
            <div class="wrapper row">
                <div class="preview col-md-5 px ">
                <div class="preview-pic tab-content mb-5">
                    <input name="image" type="hidden" value= "{{ $produk->image }}">
                    @if($produk->image)
                        <img src="{{asset("storage/$produk->image")}}" width="500" height="500">
                    @else
                        @for ($i = 1; $i <= $produk->count()+1; $i++)
                        @if($produk::find($i)!=null)
                            @if($produk->namaproduk==$produk::find($i)->namaproduk)
                                <img src="{{asset("img/$produk->namaproduk.jpg")}}"   width="500" height="500">
                            @endif
                        @endif
                    @endfor
                    @endif
                </div>
                </div>
                <div class="details col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <input name="namaproduk" type="hidden" value= "{{ $produk->namaproduk }}">
                    <h3 class="product-title">{{ $produk->namaproduk }}</h3>
                    <div class="rating">
                        <div  class="stars">
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                            <span class = "text-primary"><i class = "fas fa-star" style="color: #e5345b"></i></span>
                        </div>
                    </div>
                    <h5 class="sizes mt-5">Brand: {{ $produk->merk}}</h5>
                    <p class="product-description">{!! $produk->deskripsi !!}</p>
                    <input name="harga" type="hidden" value= "{{ $produk->harga }}">
                    <h4 class="price">Rp <span> {{ number_format($produk->harga, 0, ".", ".")  }}</span></h4>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <p>Select Quantity :</p>
                        </div>
                        <div class="col-md-6">
                            <div class="number-input position-absolute right-100">
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="1" name="quantity" value="1" type="number">
                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </div>
                    </div>
                    <input name="produk_id" type="hidden" value= "{{ $produk->id }}">
                    <input name="slug" type="hidden" value= "{{ $produk->slug }}">
                    @if(Auth()->user())
                        <input name="user_id" type="hidden" value= "{{ auth()->user()->id }}">
                        <input name="username" type="hidden" value= "{{ auth()->user()->username }}">
                    @endif
                    <br>
                    <br>
                    <div class="link addtocart">
                        @if(!Auth()->user())
                            <a href="/login" class="text-white border-0 btn btn-primary mt-4" style=" background-color: #e5345b;">Add to Cart</a>
                        @else
                            <button type="submit" class="text-white border-0 btn btn-primary mt-4" style=" background-color: #e5345b;">Add to Cart</button>
                        @endif
                        <div class="py-3 mt-5 addtocart">
                            <a href="/produk" class = "btn btn-primary mt-4">Back to Produk </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<style>
@media (max-width: 576px) { 
    .addtocart{
    position: relative;
    left: 170px;
    }
    
}
@media (min-width: 576px) { 
    .addtocart{
    position: relative;
    left: 270px;
    }
    
}
@media (min-width: 1024px) { 
    .addtocart{
    text-align: center
    }
    .back{
        float:right;
    }
}   
</style>
@endsection