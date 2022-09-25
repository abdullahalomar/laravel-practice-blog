@extends('layout.app')

@section('title', 'login')

@section('content')
    <div class="container mt-5">
        <div class="col-md-6 mx-auto">
          <h5 class="mb-4">Login</h5>
        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" >
            @error('email')
            <span class="invalid-feedback">
              <strong>{{$message}}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
            <span class="invalid-feedback">
              <strong>{{$message}}</strong>
            </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
    </div>
@endsection