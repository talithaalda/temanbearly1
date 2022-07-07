<link rel="stylesheet" href={{ asset("/img") }}>
@extends('layouts.main')

@section('container')
<br>
<br>
<div class = "container">
    <div class = "title text-center py-5">
        <h2 class = "position-relative d-inline-block">Category</h2>
    </div>
    
    <div class = "special-list row "> 
        @foreach($category as $c)
        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 mb-2">
           <a class="link" href="/category/{{ $c->slug }}">
            <div class = "special-img position-relative overflow-hidden">
                <img src = "{{asset("storage/$c->image")}}" class = "w-100">
                <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                    <i class = "fas fa-heart"></i>
                </span>
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)">{{ $c->namakategori }}</h5>
                </div>
           </div>
       </a>
       </div>
       @endforeach
        
        </div>
    </div>
</div>
<br>
@endsection