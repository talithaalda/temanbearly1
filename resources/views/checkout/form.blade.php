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
                                    @if(auth()->user()->address==null)
                                    <div class="space mb-0 text-danger"><p><b>Please input your address <a href="/profile">click here</a></b></p></div>
                                    @else
                                    <div class="space mb-0 "><p><b>{{ auth()->user()->name }} <br> {{ auth()->user()->address }}<br>{{ auth()->user()->zipcode }}</b>
                                    <a href="/profile" style="font-size: 10px; color:rgb(7, 7, 121);"> <small>Change address</small> </a></p></div>
                                    @endif
                                </div>
                                <div class="row mt-4">
                                    <div class="col"><p class="text-muted mb-2">PAYMENT DETAILS</p><hr class="mt-0"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1  @error('methodpay') is-invalid @enderror">METHOD PAYMENT</label>
                                    <select name="methodpay" id="pet-select" class="form-control form-control-sm">
                                        <option value="">--Please choose method payment--</option>
                                        <option value="Dana">Dana</option>
                                        <option value="Ovo">Ovo</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
                                    @error('methodpay')
                                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    {{-- <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="BBBootstrap Team"> --}}
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                @php
                                    $total_item=0;
                                    $total=0;
                                @endphp
                                @foreach(auth()->user()->cart as $c)
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="{{asset("storage/$c->image")}}" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col-auto"><p class="mb-0"><b>{{ $c->namaproduk }}</b>
                                                    {{-- </p><small class="text-muted">1 Week Subscription</small> --}}
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">{{ $c->quantity }}</p></div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>Rp {{ number_format($c->harga*$c->quantity, 0, ".", ".")  }}</b></p></div>
                                </div>
                                <hr class="my-2">
                                @php
                                $total_item = $total_item + $c->quantity;
                                $total = $total + ($c->harga*$c->quantity) ;
                                @endphp
                                <input name="produk_id" type="hidden" value= "{{ $c->produk_id }}">
                                <input name="quantity" type="hidden">
                                @endforeach
                                
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>Rp {{ number_format($total, 0, ".", ".")  }}</b></p></div>
                                        </div>
                                        
                                        {{-- <div class="row justify-content-between">
                                            <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                                            <div class="flex-sm-col col-auto"><p class="mb-1"><b>Rp {{ number_format($ongkir, 0, ".", ".")  }}</b></p></div>
                                        </div> --}}
                                        <div class="row justify-content-between">
                                            <div class="col-4"><p ><b>Total</b></p></div>
                                            <div class="flex-sm-col col-auto"><p  class="mb-1"><b>Rp {{ number_format($total, 0, ".", ".")  }}</b></p> </div>
                                        </div><hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input name="status" type="hidden" value= "Waiting for payment">
                <input name="user_id" type="hidden" value= "{{ auth()->user()->id }}">
                <input name="total" type="hidden" value= "{{ $total }}">
                {{-- <input name="ongkir" type="hidden" value= "{{ $ongkir }}"> --}}
                <input name="total_item" type="hidden" value= "{{ $total_item }}">
                <input name="checkout_id" type="hidden" >
                <div class="row mb-md-5 text-center mt-5">
                    <div class="col">
                        @if(auth()->user()->address==null)
                        <button type="button" class="btn btn-block ">CHECKOUT</button>
                        @else

                        <a href="/confirm">
                        <button type="submit" class="btn btn-block ">CHECKOUT</button>
                        </a>
                        @endif
                        
                    </div>
                </div>
                
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
    color: #aaa ;
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