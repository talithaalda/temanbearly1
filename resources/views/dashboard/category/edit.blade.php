@extends('dashboard.layouts.main')
@section('container')

<h1>Category : {{ $kategori->namakategori }}</h1>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="table-responsive col-lg-5">
<table class="table table-striped table-sm mt-3">
    <thead>
      <tr>
        <th class="col-lg-1">No.</th>
        <th class="col-lg-7" scope="col">Product</th>
        <th class="col-lg-2" scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kategori->produk as $p)
      <form method="post" action="/dashboard/category/{{ $p->id }}" class="md-form">
      <tr>
        <td>{{ $loop->iteration  }}</td>
        <td> <a class="link" href="/dashboard/products/show/{{ $p->slug }}"> {{ $p->namaproduk }}</a></td>
        <td>{{ $p->harga }}</td>
        <td>
            <form action="/dashboard/products/{{ $p->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this category?')"><span data-feather="x-circle"></span></button>
            </form>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection