@extends('layout.app')

@section('title', 'add post')

@section('content')
    <div class="container mt-5">
       <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{url('#')}}">Posts</a></li>
                  <li class="list-group-item"><a href="{{url('#')}}">Add new</a></li>
                  <li class="list-group-item"><a href="{{url('#')}}">Logout</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              @if (session()->has('message'))
              <h4 class="text-success">{{session('message')}}</h4>
              @endif
              <form action="{{route('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Thumbnail</label>
                  <input class="form-control" type="file" name="image" >
                  <img src="{{asset('storage/'.$post->image)}}" alt="" style="height: 100px">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                  <textarea class="form-control" name="description" rows="3">{{$post->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       </div>
    </div>
@endsection