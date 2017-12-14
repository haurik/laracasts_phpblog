@extends('layouts.master')

@section('content')

<h1>Register</h1>

<form action="/register" method="POST">

{{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required></input>
  </div>

  <div class="form-group">
    <label for="email">E-Mail: </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required></input>
  </div>
  
  <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required></input>
  </div>

  <div class="form-group">
    <label for="password_confirmation">Password Confirmation: </label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required></input>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-secondary">Register</button>
  </div>

  @include('layouts.error')
  
</form>

@endsection