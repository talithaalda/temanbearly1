@extends('layouts.main')
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-4">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
        </div>
        @endif
        
    <main class="form-signin">
        <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        <input type="hidden" name="level" value="Admin">
        <div class="form-floating">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <label for="email">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div> @enderror
            <label for="password">Password</label>
          </div>
          <a style="float:right;" class="mb-3" href="/forgotpassword">Forgot password?</a>
        <button class="w-100 btn-lg btn-primary" type="submit">Login</button>
        
        </form>
    </main>
    </div>
</div>
  <br><br><br>
@section('container')
@endsection