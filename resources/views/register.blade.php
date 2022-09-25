@extends('layout.app')

@section('title', 'register')

@section('content')
<div class="container mt-5">
   <div class="col-md-6 mx-auto">
    <h5 class="mb-4">Register</h5>
    <form action="{{route('register')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name"> 
        @error('name')
        <span class="invalid-feedback">
          <strong>{{$message}}</strong>
        </span>
        @enderror
      </div>
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
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password">
      </div>
      {{-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" name="name" for="exampleCheck1">Check me out</label>
      </div> --}}
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
   </div>
</div>
@endsection