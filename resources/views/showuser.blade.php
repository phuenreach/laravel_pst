@extends('admindashboad')

@section('title','List User')

@section('change-content')

<div class="col-md-12">
    <table class="table table-bordered" id="dataTable" width="100%">
    <thead>
         <tr>
            <th>No</th>
            <th>Name</th>
            <th>gender</th>
            <th>email</th>
            <th>phone</th>
            <th>Action</th>
        <tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <a href="{{route('edituser',$item->id)}}" class="mr-2"><i class="fa fa-edit text-info "></i></a>
                <a href="{{route('deleteuser',$item->id)}}" ><i class="fa fa-trash text-danger"></i></a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
       
    </table>
</div>
@endSection