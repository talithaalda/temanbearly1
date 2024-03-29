@extends('layouts.main')
<br><br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="post" class="md-form">
              @csrf
              @method('put')
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top  @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
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
              <button class="w-100 btn-lg btn-primary mt-3" type="submit">Register</button>
              <input type="hidden" name="level" value="User">
            </form>
            <small class="d-block text-center">Already Registered? <a href="/login">login</a></small>
          </main>
    </div>
</div>
  <br><br><br>
@section('container')
@endsection