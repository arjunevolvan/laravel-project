@extends('layout')

@section('content')
<h3>Restaurent List</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    @foreach ($data as $list)
    <tr>

        <td>{{$list->id}}</td>
        <td>{{$list->name}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->address}}</td>
    </tr>
    
    
    @endforeach
</table>
@stop