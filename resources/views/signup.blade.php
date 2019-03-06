@extends('layouts.app')


@section('pageStyle')

<link href="{{ asset('/css/style2.css') }}" rel="stylesheet">
@endsection
@section('headingstyle')
<center style="color: grey; text-shadow: 2px 2px #FF0000;"><h3>REGISTRATION FORM</h3></center>
@endsection
@section('content')
<form method="post" action="{{ url('abc') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<label>
    <p class="label-txt">ENTER YOUR FIRST NAME</p>
    <input type="text" class="input" name="firstname" value="{{ old('firstname') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
</label>
<label>
    <p class="label-txt">ENTER YOUR LAST NAME</p>
    <input type="text" class="input" name="lastname" value="{{ old('lastname') }}" required >
   
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input"  name="email" value="{{ old('email') }}" required>

    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="password"  value="{{ old('contact') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">CONFIRM PASSWORD</p>
    <input type="password" class="input" name="password_confirmation"  value="{{ old('password_confirmation') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
   <label>
    <p class="label-txt">ENTER YOUR CONTACT NO</p>
    <input type="text" class="input" name="contact" value="{{ old('contact') }}" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button>
</form>
@endsection