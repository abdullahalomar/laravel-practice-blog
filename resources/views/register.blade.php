@extends('layout.app')

@section('title', 'register')

@section('content')
<div class="container mt-5">
    <h5 class="mb-4">Register</h5>
    <div class="row">
        <div class="">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
          </div>
        <div class="">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>
          <div class="">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
          <div class="">
            <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password">
          </div>
          
    </div>
    <button class="btn btn-info mt-4">Submit</button>
</div>
@endsection