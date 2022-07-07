@extends('layouts.main')
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-4">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif
        
    <main class="form-signin">
        <form action="/forgotpassword" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>
    
        <div class="form-floating mb-5">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <label for="email">Email address</label>
        </div>
        <button class="w-100 btn-lg btn-primary" type="submit">Send Password Reset Link</button>
        
        </form>
    </main>
    </div>
</div>
  <br><br><br>
@section('container')
@endsection