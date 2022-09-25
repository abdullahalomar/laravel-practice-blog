<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="{{asset('sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC')}}" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}">Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('single')}}">Single</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('add-post')}}">Add Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('posts')}}">Posts</a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('register')}}">Register</a>
              </li>
              @endguest
              @auth
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('logout')}}">{{Auth::user()->name}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('logout')}}">Logout</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>

@yield('content')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="{{asset('sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM')}}" crossorigin="anonymous"></script>
  </body>
</html>