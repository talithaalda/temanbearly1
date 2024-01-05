@extends('dashboard.layouts.main')
@section('container')
    <br>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container ">
        <div class="card border-0 ">
            <div class="container-fluid ">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content mb-5 card" style="width: 500px;height: 500px">
                            <form method="post" action="/dashboard/products/{{ $produk->id }}" class="md-form"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <input type="hidden" name="oldImage" value="{{ $produk->image }}">
                                <img class="" src="{{ asset("storage/$produk->image") }}" width="500"
                                    height="500">
                                <img class="img-preview img-fluid editimage position-absolute" width="500"
                                    height="500">
                                <div class="card-img-overlay  d-flex align-items-center justify-content-center">
                                    <div class="btn float-left">

                                        <span>Change img</span>

                                        <input type="file" class="border-0" id="image" name="image"
                                            onchange="previewImage()">
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="details col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="namaproduk"
                                style="height: 50px; font-size:28px;" required autofocus
                                value="{{ old('namaproduk', $produk->namaproduk) }}">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" required autofocus
                                value="{{ old('slug', $produk->slug) }}">
                        </div>
                        <div class="mb-3">
                            <label class="mt-2" for="category">Category :</label>
                            <select class="form-select d-inline" name="category_id"style="width: 200px">
                                @foreach ($category as $c)
                                    @if (old('category_id', $produk->category_id) == $c->id)
                                        <option value="{{ $c->id }}" selected>{{ $c->namakategori }}</option>
                                    @else
                                        <option value="{{ $c->id }}">{{ $c->namakategori }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="sizes" for="merk" style="font-size:20px;">Brand: </label>
                            <input type="text" name="merk" required autofocus
                                value="{{ old('merk', $produk->merk) }}" style="font-size:18px;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Description</label>
                            <textarea class="form-control mb-2" name="deskripsi" rows="3" style="height: 200px">{!! old('deskripsi', $produk->deskripsi) !!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" style="font-size:24px;">Rp: </label>
                            <input type="text" min="0.00" step="0.01" name="harga" id="rupiah" required
                                autofocus value="{{ old('harga', number_format($produk->harga, 0, '.', '.')) }}"
                                style="font-size:24px;">
                        </div>
                        <div class="mb-3">
                            <label for="stok">Quantity :</label>
                            <input type="number" id="stok" name="stok" min="0" required autofocus
                                value="{{ old('stok', $produk->stok) }}">
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary text-white border-0"
                                style=" background-color: #e5345b;">Update Product</button>
                        </div>

                        </form>

                    </div>
                    <div class=" text-center">
                        <div class="py-5 mt-5 ">
                            <a href="/dashboard/products" class = "btn btn-primary mt-4">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');
            imgpreview.style.display = 'block';
            const oReader = new FileReader();
            oReader.readAsDataURL(image.files[0]);
            oReader.onload = function(oFREvent) {
                imgpreview.src = oFREvent.target.result;
            }
        }
        var tanpa_rupiah = document.getElementById('rupiah');
        tanpa_rupiah.addEventListener('keyup', function(e) {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
@endsection
