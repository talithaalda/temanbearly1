@extends('dashboard.layouts.main')
@section('container')
<div class="row ">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/dashboard/user" method="post" class="md-form">
              @csrf
              @method('put')
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create New User</h1>
            </div>
              <div class="mb-3">
                <label for="category" class="form-label">Name</label>
                <input type="text" name="name" class="form-control rounded-top  @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Username</label>
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="mb-3">
                <label for="level" class="form-label ">Level</label>
                <select class="form-select  @error('level') is-invalid @enderror" name="level" value="{{ old('payment') }}">
                    <option value="Admin">Admin</option>
                    <option value="User" >User</option>
                              
                  </select>
                  @error('level')
                  <div class="invalid-feedback">{{ $message }}</div> @enderror
        
            </div>
              <div class="mb-3">
                <label for="category" class="form-label">Email</label>
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class=" mb-3">
                <label for="category" class="form-label">Password</label>
                <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
            
          </main>
    </div>
</div>
  <br><br><br>
@endsection