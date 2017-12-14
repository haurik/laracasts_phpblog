@extends('layouts.master')

@section('content')

<h1>Login</h1>

<form action="/login" method="POST">

{{ csrf_field() }}

  <div class="form-group">
    <label for="email">E-Mail: </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required></input>
  </div>
  
  <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required></input>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-secondary">Login</button>
  </div>
  
</form>

@endsection