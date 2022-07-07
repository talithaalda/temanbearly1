@extends('dashboard.layouts.main')
@section('container')
<h1>Category : {{ $kategori->namakategori }}</h1>
<div class="table-responsive col-lg-8">
<table class="table table-striped table-sm mt-3">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kategori->produk as $p)
      <tr>
        <td>{{ $loop->iteration  }}</td>
        <td> <a class="link" href="/dashboard/products/show/{{ $p->slug }}"> {{ $p->namaproduk }}</a></td>
        <td>{{ $p->harga }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection