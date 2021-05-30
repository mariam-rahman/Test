@extends('layouts.defualt')
@section('title','Category')
@section('content')

@php
$counter = 0;
@endphp

    <h3 class="text-center">List of Categories</h3>

<div class="row justify-content-center">
    <div class="col-md-6">
    <a href="{{route('category.create')}}" class="btn btn-success">Add Category</a>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead class="thead-dark"></thead>
            <tr>
                 <th>#</th>
                 <th>Title</th>
                 <th>Description</th>
                 <th>Image</th>
                 <th>Action</th>
    </tr>
    
    @foreach($categories as $cat)
    <tr>
    <td>{{++$counter}}</td>
    <td>{{$cat->title}}</td>
    <td>{{$cat->desc}}</td>
    <td><img src="{{$cat->getImage()}}" width ="50" alt=""></td>

    <td><a href="{{route('category.edit',$cat)}}" class="text-primary">Edit</a>
    <form  method="POST" action="{{route('category.destroy',$cat)}}">
    @csrf
@method('DELETE')

    <input type="submit" value="Delete" class="bg-danger" >
    
    </form>
    </td>
    </tr>
   
    @endforeach
        </table>
    </div>
</div>
@endsection



