@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Orders</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header mb-3 col-lg-12">
        <table>
            <tbody>
                <tr class="d-flex justify-content-between">
                    <div class="d-flex">
                        <td style="padding: 0 650px 0 0">
                            <h5>Product</h5>
                        </td>
                    </div>
                    <div class="d-flex justify-content-between">
                        <td style="padding: 0 35px ">Quantity</td>
                        <td style="padding: 0 40px ">Status</td>
                        <td style="padding: 0 0 0 90px">Must Pay</td>
                    </div>
                </tr>

            </tbody>
        </table>
    </div>
    @foreach ($checkout->reverse() as $c)
        <div class="card mb-3 col-lg-12">

            <div class="card-header"> {{ $c->id }}. <b>{{ $c->user->username }}</b>
                <p class="d-inline" style="color: grey">{{ $c->date_order }}</p>
                <a href="/dashboard/orders/{{ $c->id }}" class="badge bg-warning text-decoration-none d-inline"
                    style="margin-left: 10px"><span data-feather="eye"></span>Details</a>
                <form action="/dashboard/orders/{{ $c->id }}" method="post" class="d-inline">
                    @method('put')
                    @csrf
                    <input type="hidden" value="Canceled" name="status">
                    <button class="badge bg-danger text-decoration-none border-0" style="margin-left: 10px"
                        onclick="return confirm('Are you sure to cancel this order?')">
                        <span data-feather="x-circle"></span>Cancel</button>
                </form>
                @if ($c->status == 'Paid')
                    <form action="/dashboard/orders/{{ $c->id }}" method="post" class="d-inline">
                        @method('put')
                        @csrf
                        <input type="hidden" value="Packing" name="status">
                        <button type="submit" class="badge bg-info text-decoration-none border-0"
                            style="margin-left: 10px"><span data-feather="package"></span>Packing</button>
                    </form>
                @elseif($c->status == 'Packing')
                    <form action="/dashboard/orders/{{ $c->id }}" method="post" class="d-inline">
                        @method('put')
                        @csrf
                        <input type="hidden" value="Shipping" name="status">
                        <button type="submit" class="badge bg-success text-decoration-none border-0"
                            style="margin-left: 10px"><span data-feather="check"></span>Process to courier</button>
                    </form>
                @endif


                <form action="/dashboard/orders/{{ $c->id }}" method="post" class="position-absolute d-inline"
                    style="text-align: right; right:10px;">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger text-decoration-none border-0" style="margin-left: 10px"
                        onclick="return confirm('Are you sure to delete this order?')">
                        <span data-feather="x-circle"></span></button>
                </form>
            </div>
            <div class="card-body text-dark">
                @foreach ($c->detail_orders as $order)
                    <table class="table">

                        <tbody>
                            <tr>
                                <td><img src="{{ asset('storage/' . $order->produk->image) }}" width="50"
                                        height="50">
                                </td>
                                <td>
                                    <h5>{{ $order->produk->namaproduk }}</h5>
                                </td>
                                <td class="text-center">x {{ $order->quantity }}</td>
                                <td class="text-center">{{ $c->status }}</a></td>
                                <td class="text-center">Rp
                                    {{ number_format($order->produk->harga * $order->quantity, 0, '.', '.') }}</td>

                            </tr>

                        </tbody>
                    </table>
                @endforeach
                <h5 style="text-align: right">Rp {{ number_format($c->total, 0, '.', '.') }}</h5>
            </div>
        </div>
    @endforeach
@endsection
