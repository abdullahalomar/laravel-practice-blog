@extends('layout.app')

@section('title', 'login')

@section('content')
    <div class="container mt-5">
        <h5 class="mb-4">Login</h5>
        <div class="row">
            <div class="">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
              </div>
              <div class="">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password">
              </div>
              
        </div>
        <button class="btn btn-info mt-4">Submit</button>
    </div>
@endsection