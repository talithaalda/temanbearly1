@extends('layouts.main')

@section('container')
    <H1>Halaman About</H1>
    <h3>{{ $nama }}</h3>
    <h3>{{ $alamat }}</h3>
    <h3>{{$notelp}}</h3>
<img src={{asset("img/LOGO.png")}} alt="Logo teman bearly" width="700">
@endsection
 
    