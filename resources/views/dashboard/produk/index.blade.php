@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>

  @endif
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Product</th>
          <th scope="col">Merk</th>
          <th scope="col">Harga</th>
          <th scope="col">Category</th>
          <th scope="col">Stok</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produk as $p)
        <tr>
          <td>{{ $loop->iteration  }}</td>
          <td>{{ $p->namaproduk }}</td>
          <td>{{ $p->merk }}</td>
          <td>Rp {{ number_format($p->harga, 0, ".", ".")  }}</td>
          <td>{{ $p->category->namakategori }}</td>
          <td>{{ $p->stok }}</td>
          <td>
            <a href="/dashboard/products/show/{{ $p->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
          
            <a href="/dashboard/products/edit/{{ $p->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          
            <form action="/dashboard/products/{{ $p->slug }}/" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this product?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection