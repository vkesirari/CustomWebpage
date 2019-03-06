@extends('layouts.app')
@section('pageStyle')
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <center><h3>Sign In</h3></center> 
      </div>
      <div class="card-body">      
        <form method='post' action="{{ url('/post1') }}" >
         <input type="hidden" name="_token" value="{{ csrf_token() }}" >
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn" name="login">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="signup">Sign Up</a>
        </div>
       
      </div>
    </div>
  </div>
</div>
@endsection




 <!-- <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div> -->
  <!-- <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->