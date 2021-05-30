@extends('layouts.defualt')
@section('content')
@section('title','Item')


<div class ="d-flex justify-content-center mt-5">
<h1>Add Item</h1>
</div>

<div  class="row justify-content-center mt-5" >
    <div class="col-md-6">
        <form action="{{Route('item.store')}}" method="post"  enctype="multipart/form-data">
@csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Title">
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="qty" class="form-control" placeholder="Enter Title">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter Price per-item">
        </div>

        <div class="form-group">
    <label>Image</label>
    <input type="file" name= "image" class="form-control-file">
  </div>


        <div class="form-group">
            <label>Description</label>
           <textarea name="desc" class="form-control"  rows="3"></textarea>
        </div>

       
        <div class="row">
            <div class="col-md-4">
                <input type="submit" value="Add Item" class="form-control btn btn-dark">
            </div>
        </div>


 

        </form>
    </div>
</div>


@endsection




