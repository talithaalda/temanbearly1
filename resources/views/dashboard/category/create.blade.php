@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
</div>
<div class="col-lg-8">
   <form method="post" action="/dashboard/category" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="namakategori" class="form-label">Category Name</label>
      <input type="text" class="form-control" name="namakategori" required autofocus value="{{ old('namakategori') }}"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" required autofocus value="{{ old('slug') }}"> 
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Upload Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">The image must be an image</div> @enderror
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

<script>
    // const namaproduk = document.querySelector('#namaproduk');
    // const slug = document.querySelector('#slug');

    // namaproduk.addEventListener('change',function(){
    //     fetch('/dashboard/products/checkSlug?namaproduk=' + namaproduk.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    // });

    // document.addEventListener('trix-file-accept',function(e)){
    //     e.preventDefault();
    // }
    function previewImage(){
        const image = document.querySelector('#image');
        const imgpreview = document.querySelector('.img-preview');
        imgpreview.style.display = 'block';
        const oReader = new FileReader();
        oReader.readAsDataURL(image.files[0]);
        oReader.onload = function(oFREvent){
            imgpreview.src = oFREvent.target.result;
        }
    }
    
</script>
@endsection