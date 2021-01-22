@extends('layout')

@section('content')
<div class="container col-sm-6">
  <h2>Register</h2>
    <form method="post" action="/register">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
          </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" placeholder="Enter Email">
        </div>   
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
          </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
</div>
@stop