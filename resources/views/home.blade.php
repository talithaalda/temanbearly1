@extends('layouts.main')
@include('partials.header');
@section('container')

 <!-- collection -->
 <section id = "collection" class = "py-5">
     <div class = "container">
         <div class = "title text-center">
             <h2 class = "position-relative d-inline-block">Sale</h2>
         </div>

         <div class = "row g-0">
             <div class = "collection-list mt-4 row gx-0 gy-3">
                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                    @if($produk->find(3)!=null)
                     <a href="/produk/{{ $produk->find(3)->slug }}" class="link"  >
                     <div class = "special-img position-relative overflow-hidden">
                         <img src="{{ asset("storage/".$produk->find(3)->image)}}" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star" ></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">{{ $produk->find(3)->namaproduk }}</p>
                         <span class = "fw-bold">Rp {{ number_format($produk->find(3)->harga, 0, ".", ".")  }}</span>
                     </a>
                     @endif
                     </div>
                 </div>
                 
                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                     <div class = "special-img position-relative overflow-hidden">
                        @if($produk->find(6)!=null)
                         <a href="/produk/{{ $produk->find(6)->slug }}" class="link"  >
                         <img src = "{{ asset("storage/".$produk->find(6)->image)}}" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">{{ $produk->find(6)->namaproduk }}"</p>
                         <span class = "fw-bold">Rp  {{ number_format($produk->find(6)->harga, 0, ".", ".")  }}</span>
                     </a>
                     @endif
                     </div>
                 </div>

                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                     <div class ="special-img position-relative overflow-hidden">
                        @if($produk->find(4)!=null)
                         <a href="/produk/{{ $produk->find(4)->slug }}" class="link"  >
                         <img src = "{{ asset("storage/".$produk->find(4)->image)}}" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle">sale</span>
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">{{ $produk->find(4)->namaproduk }}"</p>
                         <span class = "fw-bold">Rp  {{ number_format($produk->find(4)->harga, 0, ".", ".")  }}</span>
                     </a>
                     </a>
                     @endif
                     </div>
                 </div>

                 <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                     <div class = "special-img position-relative overflow-hidden">
                        @if($produk->find(7)!=null)
                         <a href="/produk/{{ $produk->find(7)->slug }}" class="link"  >
                         <img src = "{{ asset("storage/".$produk->find(7)->image)}}" class = "w-100" width="300" height="300">
                         <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center circle ">sale</span>
                         
                     </div>
                     <div class = "text-center">
                         <div class = "rating mt-3">
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                             <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         </div>
                         <p class = "text-capitalize my-1">{{ $produk->find(7)->namaproduk }}"</p>
                         <span class = "fw-bold">Rp  {{ number_format($produk->find(7)->harga, 0, ".", ".")  }}</span>
                     </a>
                     @endif
                     </div>
                 </div>

                 
             </div>
         </div>
     </div>
 </section>
 <!-- end of collection -->
  <!-- Best Sellers -->
  <section id = "special" class = "py-0">
     <div class = "container">
         <div class = "title text-center py-5">
             <h2 class = "position-relative d-inline-block">Best Sellers</h2>
         </div>

         <div class = "special-list row g-0">
             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "{{ asset("storage/".$produk->find(9)->image)}}" class = "w-100" width="300" height="300">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">{{ $produk->find(9)->namaproduk }}</p>
                     <span class = "fw-bold d-block">Rp  {{ number_format($produk->find(9)->harga, 0, ".", ".")  }}</span>
                     @if($produk->find(9)!=null)
                     <a href = "/produk/{{ $produk->find(9)->slug }}" class = "btn btn-primary mt-3">Add to Cart</a>
                     @endif
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "{{ asset("storage/".$produk->find(10)->image)}}" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">{{ $produk->find(10)->namaproduk }}</p>
                     <span class = "fw-bold d-block">Rp  {{ number_format($produk->find(10)->harga, 0, ".", ".")  }}</span>
                     @if($produk->find(10)!=null)
                     <a href = "/produk/{{ $produk->find(10)->slug }}" class = "btn btn-primary mt-3">Add to Cart</a>
                     @endif
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "{{ asset("storage/".$produk->find(7)->image)}}" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">{{ $produk->find(7)->namaproduk }}</p>
                     <span class = "fw-bold d-block">Rp  {{ number_format($produk->find(7)->harga, 0, ".", ".")  }}</span>
                     @if($produk->find(7)!=null)
                     <a href = "/produk/{{ $produk->find(7)->slug }}" class = "btn btn-primary mt-3">Add to Cart</a>
                     @endif
                 </div>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "{{ asset("storage/".$produk->find(8)->image)}}" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                 </div>
                 <div class = "text-center">
                     <div class = "rating mt-3">
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                         <span class = "text-primary"><i class = "fas fa-star"></i></span>
                     </div>
                     <p class = "text-capitalize mt-3 mb-1">{{ $produk->find(8)->namaproduk }}</p>
                     <span class = "fw-bold d-block">Rp  {{ number_format($produk->find(8)->harga, 0, ".", ".")  }}</span>
                     <section id = "category" >
                    @if($produk->find(8)!=null)
                     <a href = "/produk/{{ $produk->find(8)->slug }}" class = "btn btn-primary mt-3">Add to Cart</a>
                     @endif
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end of best sellers -->
<!-- Category -->
  
     <div class = "container">
         <div class = "title text-center py-5">
             <h2 class = "position-relative d-inline-block">Category</h2>
         </div>
         
         <div class = "special-list row "> 
             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <a class="link" href="/category/{{ $category[0]->slug }}">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/skincare.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)">{{ $category[0]->namakategori }}</h5>
                     </div>
                </div>
            </a>
            </div>
            
             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <a class="link" href="/category/{{ $category[1]->slug }}">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/makeup.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)">{{ $category[1]->namakategori }}</h5>
                     </div>
                 </div>
                </a>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <a class="link" href="/category/{{ $category[2]->slug }}">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/parfum.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)">{{ $category[2]->namakategori }}</h5>
                     </div>
                 </div>
                </a>
             </div>

             <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <a class="link" href="/category/{{ $category[3]->slug }}">
                 <div class = "special-img position-relative overflow-hidden">
                     <img src = "img/bag.jpg" class = "w-100">
                     <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                         <i class = "fas fa-heart"></i>
                     </span>
                     <div class="card-img-overlay d-flex align-items-center p-0">
                         <h5 class="card-title text-center flex-fill p-2 fs-0 text-capitalize mt-3 mb-1" style="background-color: rgba(0,0,0,0.2)">{{ $category[3]->namakategori }}</h5>
                     </div>
                      <!-- end of Category -->
                    </a>
                 </div>
                 <div style="float:right;" class=" mt-1 ">
                    <a href="/category" class = "btn btn-primary mt-4">See more...</a>
                </div>
             </div>
         </div>
     </div>
     
 </section>

 <!-- offer -->
 <section id = "offers" class = "py-5">
     <div class = "container">
         <div class = "row d-flex align-items-center justify-content-center text-center ">
             <div class = " offers-content">
                 <span class = "text-capitalize text-white">Discount Up To 40%</span>
                 <h2 class = " text-capitalize text-white">Grand Sale Offer!</h2>
                 <a href = "#" class = "btn">Buy Now</a>
             </div>
         </div>
         <section id = "about" ">
     </div>
 </section>
 <!-- end of offer -->

 <!-- about us -->
 
     <div class = "container">
         <div class = "row gy-lg-5 align-items-center">
             <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                 <div class = "title pt-3 pb-5">
                     <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                 </div>
                 <p class = "lead text-muted">Teman Bearly Beauty.</p>
                 <p>Teman Bearly Beauty merupakan online shop yang menjual berbagai macam skincare,
                     makeup, parfum, dan aksesoris dari berbagai brand lokal maupun internasional</p>
                 <p>No Telp : 085156340246</p>
             </div>
             <div class = "col-lg-6 order-lg-0 py-5">
                 <img src = "img/about.jpg" alt = "" class = "img-fluid">
             </div>
         </div>
     </div>
 </section>
 <!-- end of about us -->

    
@endsection
 

