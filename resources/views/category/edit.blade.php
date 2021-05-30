@extends('layouts.defualt')
@section('content')


<div class ="d-flex justify-content-center mt-5">
<h1>Edit Category</h1>
</div>



<div  class="row justify-content-center mt-5" >
<div class="col-md-6">
<form action="{{Route('category.update',$category)}}" method="post"  enctype="multipart/form-data">
@csrf
 @method('PUT')
<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title" value = "{{$category->title}}">
  </div>
  <div class="form-group">
    <label>Discription</label>
    <textarea name ="desc" class="form-control"  rows="3">{{$category->desc}}</textarea>
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control-file">
  </div>

<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="submit" value="Update" class="form-control btn btn-dark">
</div>
</div>

</div>
 
</form>
</div>
</div>

@endsection




