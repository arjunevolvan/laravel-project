@extends('layout')

@section('content')
<div class="col-sm-6">
    <form method="POST" action="/add">
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
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address">
          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@stop