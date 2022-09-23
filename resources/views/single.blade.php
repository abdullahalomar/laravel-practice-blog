@extends('layout.app')

@section('title', 'single blog')

@section('content')
<section class="container mt-5">
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>
          <button class="btn btn-info mt-2">Submit</button>
      </div>
</section>
@endsection
    

