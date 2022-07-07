@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Category</h1>
  </div>
  
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive ">
    <a href="/dashboard/category/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category</th>
          <th scope="col">Slug</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $c)
        <form method="post" action="/dashboard/category/{{ $c->id }}" class="md-form" enctype="multipart/form-data">
        @method('put')
        @csrf
        <tr>
          <td>{{ $loop->iteration  }}</td>
          <td class="col-lg-3"><input type="text" name="namakategori" required autofocus value="{{ old("namakategori",$c->namakategori) }}" style="font-size:18px; width:300px" ></td>
          <td class="col-lg-3"><input type="text" name="slug" required autofocus value="{{ old("slug",$c->slug) }}" style="font-size:18px; width:300px" ></td>
          <td class="col-lg-3">
              @if($c->image)
                  <input type="hidden" name="oldImage" value="{{ $c->image }}">
                  <img src="{{asset("storage/$c->image")}}" width="100" height="100">
                  <div class="">
                    <input type="file" class=" @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image') <div class="invalid-feedback">The image must be an image</div> @enderror
                  </div>
              @endif 
          </td>
          <td>
            <button type="submit" class="btn btn-danger border-0" style="border-radius: 4px;padding: 3px .5em;
            background-color: #059b23;color:white"><span data-feather="check-circle"></span>Update</button>
          </form>
            <form action="/dashboard/category/{{ $c->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this category?')"><span data-feather="x-circle"></span></button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection