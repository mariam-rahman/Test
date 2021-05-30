@extends('layouts.defualt')
@section('content')
<div class ="d-flex justify-content-center mt-5">
<h1>Add Category</h1>
</div>



<div  class="row justify-content-center mt-5" >
<div class="col-md-6">
<form action="{{Route('category.store')}}" method="post"  enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Discription</label>
    <textarea name ="desc" class="form-control"  rows="3"></textarea>
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="file" name= "image" class="form-control-file">
  </div>

<div class="row">
<div class="col-md-4">

<input type="submit" value="Add" class="form-control btn btn-dark">
</div>
</div>

</div>
 
</form>
</div>
</div>

@endsection




