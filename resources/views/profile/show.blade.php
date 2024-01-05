
@extends('layouts.main')

@section('container')
<br><br><br>
@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <br><br>
            <div class="rectangle">
            <h5>hello {{ auth()->user()->name }}!</h5>
            <div>
                <ul>
                    <ul>
                        <a class="text-decoration-none text-dark" href="/orderhistory">Order History</a>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 content-profil">
        <div class=" row">
            <form method="post" action="/profile/{{ auth()->user()->id }}">
                @csrf
                <div class="title-cont-pro col-sm-12 text-center mt-5 mb-5">
                    <h3>PERSONAL DETAILS</h3>
                </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group ">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required autofocus value="{{ old('name',auth()->user()->name) }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required autofocus value="{{ old('name',auth()->user()->username) }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" required autofocus value="{{ old('email',auth()->user()->email) }}">
                            </div>
                        </div>
                        <input name="password" type="hidden" value= "{{ auth()->user()->password }}">
                        {{-- <div class="form-group ">
                            <div class="mb-3">
                                <label for="password">Change Password</label>
                                <input type="password" class="form-control" name="new_password" placeholder="Password" id="password"  >
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="mb-3">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm Password" id="confirm_password">
                            </div>
                        </div> --}}
                        <div class="form-group ">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" required autofocus value="{{ old('phone',auth()->user()->phone) }}">
                            </div>
                        </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group ">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea  rows="4" cols="50" class="input_text form-control" name="address" >{{ auth()->user()->address }}</textarea>
                                    </td>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="mb-3">
                                        <label for="Country" class="form-label">Country</label>
                                        <select name="country" class="input_text form-control">
                                            <option value="1">Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="form-group ">
                                    <div class="mb-3">
                                        <label for="province" class="form-label">Province</label>
                                        <input type="text" class="form-control" name="province" required autofocus value="{{ old('province',auth()->user()->province) }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <select class="form-select" name="city">
                                        @foreach($city as $c)
                                        @if(old('city',auth()->user()->city) == $c->id)
                                        <option value="{{ $c->id }}" selected>{{ $c->title }}</option>
                                        @else
                                        <option value="{{ $c->id }}" >{{ $c->title }}</option>
                                        @endif
                                        @endforeach
                                      </select>

                                </div>
                                <div class="form-group ">
                                    <div class="mb-3">
                                        <label for="subdistrict" class="form-label">Sub District</label>
                                        <input type="text" class="form-control" name="subdistrict" required autofocus value="{{ old('subdistrict',auth()->user()->subdistrict) }}">
                                    </div>
                                </div> --}}
                                <div class="form-group ">
                                    <div class="mb-3">
                                        <label for="Zipcode" class="form-label">Zipcode</label>
                                        <input type="text" class="form-control" name="zipcode" required autofocus value="{{ old('zipcode',auth()->user()->zipcode) }}">
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="text-center mb-3">
                              <button type="submit" name="submit" class="btn btn-success float-right">Save</button>
                            </div>

                        </table>
                    </div>
                </div>

<style>
    .rectangle {
border-radius: 10px;
display: inline-block;
margin-bottom: 30px;
margin-right: 5px;
width: 250px;
height: 100px;
border: 3px dashed rgb(143, 143, 143);
background-color: white;
padding: 20px 30px;
position: relative;
float: right;
}
</style>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
@endsection
