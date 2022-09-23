@extends('layout.app')

@section('title', 'posts')

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
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>Lorem ipsum</td>
                <td>24 sep 2022</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Edit</button>
                </td>
              </tr>
             
            </tbody>
          </table>
     </div>
    </div>
 </div>
@endsection