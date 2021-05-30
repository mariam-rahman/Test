@extends('layouts.defualt')
@section('title','Stocks')
@section('content')
<div class ="d-flex justify-content-center mt-5">
<h1>Add Stoks</h1>
</div>



<div  class="row justify-content-center mt-5" >
<div class="col-md-6">
<form action="{{Route('stok.store')}}" method="post">
@csrf
<div class="form-group">
    <label>Product Name</label>
    <input type="text" name="product_name" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="price per item">
  </div>

  <div class="form-group">
    <label>Quantity</label>
    <input type="number" name="qty" class="form-control" placeholder="Enter Quantity">
  </div>

  <div class="form-group">
    <label>Chose Stock type:</label>
    <select class="form-control" name="stock_type">
    <option value="">--select--</option>
      <option value="sub stock">Sub Stock</option>
      <option value = "main stock">Main Stock</option>
      </select>
  </div>
  
  <div class="form-group">
    <label>Chose category:</label>
    <select class="form-control" name="category_id">
    <option value="">--select--</option>
      <option value="2">category_id</option>
      </select>
  </div>
  

<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="submit" value="Add Stock" class="form-control btn btn-dark">
</div>
</div>

</div>
 
</form>
</div>
</div>

@endsection




