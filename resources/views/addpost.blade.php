@extends('layout.app')

@section('title', 'add post')

@section('content')
    <div class="container mt-5">
       <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{url('')}}">Posts</a></li>
                  <li class="list-group-item"><a href="{{url('')}}">Add new</a></li>
                  <li class="list-group-item"><a href="{{url('')}}">Logout</a></li>
                </ul>
              </div>
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>
       </div>
    </div>
@endsection