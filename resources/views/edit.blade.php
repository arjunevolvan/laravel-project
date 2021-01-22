@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit Restaurent</h1>
    <form method="POST" action="/edit/{{$data['id']}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$data['name']}}" valu placeholder="Enter Name">
          </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="{{$data['email']}}" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="{{$data['address']}}" placeholder="Enter Address">
          </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>
@stop