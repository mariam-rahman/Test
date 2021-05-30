@extends('layouts.defualt')
@section('content')

@php
$counter = 0;
@endphp

    <h3 class="text-center">Lists of Stocks</h3>

<div class="row justify-content-center">
    <div class="col-md-6">
    <a href="{{route('stok.create')}}" class="btn btn-success">Add Stock</a>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead class="thead-dark"></thead>
            <tr>
                 <th>#</th>
                 <th>Product Name</th>
                 <th>Price</th>
                 <th>Quantity</th>
                 <th>Stock Type</th>
                 <th>Category</th>
                 <th>Action</th>
    </tr>
    
    @foreach($stocks as $stock)
    <tr>
    <td>{{++$counter}}</td>
    <td>{{$stock->product_name}}</td>
    <td>{{$stock->price}}</td>
    <td>{{$stock->qty}}</td>
    <td>{{$stock->stock_type}}</td>
    <td>{{$stock->category_id}}</td>
    
   

    <td><a href="" class="text-primary">Edit</a>
    <form  method="POST" action="">
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



