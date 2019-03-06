<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MyAddToTaskc</title>
     <!-- CSS And JavaScript -->
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/mdb5.css') }}" rel="stylesheet">
<link href="{{ asset('/css/taskdesg.css') }}" rel="stylesheet">
    </head>
     {{ Auth::user()->email }}
    <div class="btn btn-danger" style="color: black;float: right;">  
       
    <a href="{{ url('/logout') }}" > <font color="#FFFFFF"> logout</font> </a>
</div>
<div class="btn btn-success" style="color: black;float: right;">  
       
    <font color="#FFFFFF"><a href="#" > <font color="#FFFFFF">Profile </font></a>
</div>

    <body>
        @include('/flast_message')
        @yield('content')
    
    </body>
</html>