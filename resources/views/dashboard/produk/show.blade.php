
@extends('dashboard.layouts.main')
@section('container')
<h1>&emsp;</h1>
<div class="text-center mb-5">
    <a href="/dashboard/products/edit/{{ $produk->slug }}" class="btn border-0" style="border-radius: 4px;padding: 7px .9em;
        background-color: #059b23;color:white"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/products/{{ $produk->slug }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn border-0" style="border-radius: 4px;padding: 7px .9em;
    background-color: #f80909f1;color:white" onclick="return confirm('Are you sure to delete this category?')">
    <span data-feather="x-circle"></span>Delete</button>
    </form>
</div>
<div class="container ">
    <div class="card border-0 ">
        <div class="container-fluid ">
            <div class="wrapper row">
                <div class="preview col-md-6 px ">
                <div class="preview-pic tab-content mb-5">
                    @if($produk->image)
                        <img src="{{asset("storage/$produk->image")}}" width="500" height="500">
                    @else
                        @for ($i = 1; $i <= $produk->count()+1; $i++)
                            @if($produk::find($i)!=null)
                                @if($produk->namaproduk==$produk::find($i)->namaproduk)
                                    <img src="{{asset("img/$produk->namaproduk.jpg")}}" width="500" height="500">
                                @endif
                            @endif
                        @endfor
                    @endif
                </div>
                </div>
                <div class="details col-md-6">
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
                    <h4 class="price">Rp <span> {{ $produk->harga}}</span></h4>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <p>Select Quantity :</p>
                        </div>
                        <div class="col-md-6">
                            <div class="number-input position-absolute right-100">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="link text-center">
                        {{-- <a href = "/produk/{{ $produk->slug }}" style=" background-color: #e5345b;" class = "text-white border-0 btn btn-primary mt-4">Add to Cart</a> --}}
                        <div style="float:right;;" class="py-5 mt-5 ">
                            <a href="/dashboard/products" class = "btn btn-primary mt-4">Back to all my product </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
