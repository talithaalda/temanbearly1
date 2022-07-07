@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>

  @endif
  <div class="table-responsive">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Level</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $u)
        <tr>
          <td>{{ $loop->iteration  }}</td>
          <td>{{ $u->name }}</td>
          <td>{{ $u->username }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->level }}</td>
          <td>{{ $u->phone }}</td>
          <td>{{ $u->address }}</td>
          <td>
          
            <form action="/dashboard/user/{{ $u->id }}/" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this user?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection