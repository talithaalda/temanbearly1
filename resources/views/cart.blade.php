@extends('layouts.main')

@section('container')
<link rel = "stylesheet" href = {{ asset("css/cart.css") }}>
<br><br>

   <div class="CartContainer py-5">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
		<form action="/cart" method="post" class="d-inline">
			@method('delete')
			@csrf
			<button class="border-0" style="background-color: white" onclick="return confirm('Are you sure to delete all item?')"><h5 class="Action">Remove all</h5></button>
		</form>
   	   </div>
        @php
            $total=0;
			$item=0;
        @endphp
		@if(session()->has('success'))
		<div class="alert alert-success" role="alert">
		  {{ session('success') }}
		</div>
		@endif
        @foreach(auth()->user()->cart as $c)
		
   	   <div class="Cart-Items">
   	   	  <div class="image-box">
   	   	  	<img src="{{asset("storage/$c->image")}}" height="120px" >
   	   	  </div>
   	   	  <div class="about ">
   	   	  	<h3 class="title ">{{ $c->namaproduk }}</h3>
   	   	  	{{-- <img src="{{ asset("storage/".$produk->find(3)->image)}}" height="30px"> --}}
   	   	  </div>
   	   	  <div class="counter">
			<h3 class="title ">&emsp;&emsp;&emsp;{{ $c->quantity }} x</h3>		
            
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">Rp {{ number_format($c->harga*$c->quantity, 0, ".", ".")  }}</div>
            @php
			 	$item = $item + $c->quantity;
                $total = $total + ($c->harga*$c->quantity) 
            @endphp
			</form>
            <form action="/cart/{{ $c->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="text-decoration-none border-0 text-white" style="background-color: rgba(255, 9, 9, 0.799); font-weight:500;font-size:14px;border-radius:20px" onclick="return confirm('Are you sure to delete this item?')">Remove</button>
          </form>
   	   	  </div>
   	   </div>
        @endforeach
   	  
   	 <hr> 
    <div class="position-relative py-2 bottom" >
   	 <div class="checkout ">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Total</div>
   	 		<div class="items">{{ $item }} items</div>
   	 	</div>
   	 	<div class="total-amount">Rp {{ number_format($total, 0, ".", ".")  }}</div>
   	 </div>
		@if(auth()->user()->address==null)
		<a href="/profile"><button class="button btn-primary">Checkout</button></div></a>
		@else
		<a href="/checkout"><button class="button btn-primary">Checkout</button></div></a>
		@endif
   </div>
</div>

@endsection