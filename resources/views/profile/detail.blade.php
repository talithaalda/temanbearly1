@extends('layouts.main')

@section('container')
<div class=" container-fluid my-5 mt-5 py-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col" style="margin-right: 0px">
                        <p class="text-muted space mb-0" >Teman Bearly Beauty</p>   
                    </div>
                    <div class="col "style="margin-right: 10%">
                        <div class="row justify-content-start ">
                            <div class="col " >
                                <img class="irc_mi img-fluid cursor-pointer " src={{ asset("img/LOGO4.png") }}  width="70" height="70" >
                            </div>
                        </div>
                    </div>
                </div>
               
                <form method="post" action="/checkout" enctype="multipart/form-data">
                    @csrf
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">
                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                <div class="col justify-content-between">
                                    <div class="space mb-0 "><p><b>{{ $checkout->user->name }}<br>{{ $checkout->user->address }}<br>{{ auth()->user()->zipcode }}</b>
                                    <a href="/profile" style="font-size: 10px; color:rgb(7, 7, 121);"> <small>Change address</small> </a></p></div>
                                    
                                </div>
                                <div class="row mt-4">
                                    <div class="col"><p class="text-muted mb-2">PAYMENT DETAILS</p><hr class="mt-0"></div>
                                </div>
                                
                                <div class="col justify-content-between">
                                  <div class="space mb-0 "><p><b>Method : </b>{{ $checkout->methodpay }}
                                    @if($checkout->nota==null)
                                        <br><a href="/confirm/{{ $checkout->id }}">Click here to upload nota</a>
                                    @else
                                    <br><img class=" img-fluid col-sm-7" src="{{asset("storage/".$checkout->nota)}}" width="200">
                                    @endif
                                </div>
                                  
                              </div>
                                {{-- <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">CARD NUMBER</label>
                                    <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="4534 5555 5555 5555">
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4  mb-2 space">Order Date : {{ $checkout->date_order }} </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                @php
                                    $total_item=0;
                                    $total=0;
                                @endphp
                                @foreach($checkout->detail_orders as $order)
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="{{asset("storage/".$order->produk->image)}}" width="62" height="62">
                                                <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col-auto"><p class="mb-0"><b>{{ $order->produk->namaproduk }}</b>
                                                    {{-- </p><small class="text-muted">1 Week Subscription</small> --}}
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">{{ $order->quantity }}</p></div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>Rp {{ number_format($order->produk->harga*$order->quantity, 0, ".", ".")  }}</b></p></div>
                                </div>
                                <hr class="my-2">
                                @php
                                $total_item = $total_item + $order->quantity;
                                $total = $total + ($order->produk->harga*$order->quantity);
                                @endphp
                                @endforeach
                                
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>Rp {{ number_format($total, 0, ".", ".")  }}</b></p></div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>Rp {{ number_format($checkout->ongkir, 0, ".", ".")  }}</b></p></div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p ><b>Total</b></p></div>
                                            <div class="flex-sm-col col-auto"><p  class="mb-1"><b>Rp {{ number_format($checkout->total, 0, ".", ".")  }}</b></p> </div>
                                        </div><hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input name="user_id" type="hidden" value= "{{ auth()->user()->id }}">
                <input name="total" type="hidden" value= "{{ $total }}">
                <input name="total_item" type="hidden" value= "{{ $total_item }}">
                <input name="checkout_id" type="hidden" >
                
                
                </form>  
            </div>
        </div>
    </div>
</div>

<style>
.space{
    letter-spacing: 0.8px !important;
}

a {
    text-decoration: none !important;
    color: rgb(100, 99, 99) ;
}

.card-header{
    background-color: #fff;
    border-bottom:0px solid #aaaa !important;
}

p{
    font-size: 13px ;
}
        
.small{
    font-size: 9px !important;
}

.boxed-1{
    padding: 0px 8px 0 8px ;
    color: black !important;
    border: 1px solid #aaaa;
}
</style>
@endsection