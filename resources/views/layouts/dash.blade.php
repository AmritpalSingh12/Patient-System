<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div  class="container pt-5 d-flex ">
       <div class="me-auto">
           @yield('header')
       </div>
       <div>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
           </form>
           <a class="btn btn-dark justify-content-end" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
           </a>
       </div>
    </div>
    <div>
        @if(session()->has('message'))
            <div>
                {{session('message')}}
            </div>
        @endif
    </div>
    <div class="container pt-3">
        @yield('content')
    </div>


    @yield('scripts')
</body>
</html>
