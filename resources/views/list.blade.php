@extends('layout')

@section('content')



@if(Session()->get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session()->get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<button class="float-left" href="{{ route('logout') }}"
         onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
</button>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>               
 
<h3>Restaurent List</h3>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>     
        </tr>
    </thead>
    @foreach ($data as $list)
    <tr>

        <td class="table-danger">{{$list->id}}</td>
        <td class="table-success">{{$list->name}}</td>
        <td class="table-info">{{$list->email}}</td>
        <td class="table-secondary">{{$list->address}}</td>
        <td>
            <a href="/delete/{{$list->id}}" class="btn btn-danger">Delete</i></a>
            <a href="/edit/{{$list->id}}" class="btn btn-success">Edit</i></a>


        </td>
    </tr>  
    @endforeach
</table>
@stop