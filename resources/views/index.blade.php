@extends('layout.app')

@section('title', 'Welcome to blog')
    
@section('content')
<section class="container mt-5">
    <div class="mx-auto">
      <div class="row row-cols-md-3 gap-5">

          @foreach ($posts as $post)
        <div class="card" style="width: 18rem;">
          <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            
            <a type="button" class="btn btn-primary" href="{{route('single',$post->id)}}">View</a>
            <a type="button" class="btn btn-primary" href="{{route('edit_post',$post->id)}}">Edit</a>
          </div>
        </div>
        @endforeach

    </div>
    </div>
</section>
@endsection
