@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>
<div class="col-lg-8">
   <form enctype="multipart/form-data" method="post" action="/dashboard/products" enctype="multipart/form-data">
    @csrf
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="mb-3">
      <label for="namaproduk" class="form-label">Product Name</label>
      <input type="text" class="form-control" name="namaproduk" 
      required autofocus value="{{ old('namaproduk') }}"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" required autofocus value="{{ old('slug') }}"> 
    </div>
    <div class="mb-3">
        <label for="merk" class="form-label">Brand</label>
        <input type="text" class="form-control" name="merk" required autofocus value="{{ old('merk') }}"> 
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="text" class="form-control" name="harga" required autofocus value="{{ old('harga') }}" id="rupiah"> 
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            @foreach($category as $c)
            @if(old("category_id") == $c->id)
            <option value="{{ $c->id }}" selected>{{ $c->namakategori }}</option>
            @else
            <option value="{{ $c->id }}" >{{ $c->namakategori }}</option>
            @endif            
            @endforeach
          </select>

    </div>

    <div class="form-group mb-3">
        <label for="deskripsi">Description</label>
        <textarea class="form-control mb-2" name="deskripsi" rows="3" style="height: 200px">{!! old('deskripsi') !!}</textarea>
    </div> 
    <div class="mb-3">
        <label for="image" class="form-label">Upload Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">The image must be an image</div> @enderror
    </div>
    <div class="mb-3">
        <label for="stok">Quantity :</label>
        <input type="number" name="stok" min="0" max=1000  required autofocus value="{{ old('stok') }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
</div>

<script>
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
    
    var tanpa_rupiah = document.getElementById('rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
 
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>

@endsection