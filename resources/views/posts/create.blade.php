@extends('layouts.master')

@section('content')

<form action="/posts" method="POST">

{{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
  </div>

  <div class="form-group">
    <label for="post">Post: </label>
    <textarea class="form-control" id="post" name="post" placeholder="Enter post"></textarea>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-secondary">Create post</button>
  </div>  

  @include('layouts.error')

</form>

<hr>

@endsection