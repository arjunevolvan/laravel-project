@extends('layout')

@section('content')
<div class="container col-sm-6">
    <h2>Login</h2>
    <form method="post" action="/login">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" placeholder="Enter Email">
        </div>   
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" placeholder="Enter Password">
          </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div>
@stop