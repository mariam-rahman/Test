<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories =Category::all();
        return view('category/index',compact('categories'));
    
    }

    public function create(){
        return view('category/create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        $data = new Category();
      $data->title = $request->title;
      $data->desc = $request->desc;
      $imageName = "";
       if($request->image !=''){
        $imageName = time().'.'.$request->image->extension(); 
      $request->image->move(public_path('images_category'),$imageName);
      $data->image = $imageName;

       }
      
      $data->save();

      return redirect('/category');
     }


    public function edit($id){
        $category = Category::find($id);

        return view('category.edit',compact('category'));
    }


    public function update($id,Request $request){
        $category = Category::find($id);
        if($request->image !=""){
            $old_image = 'images_category/'.$category->image;
            if(File::exists($old_image)){
                File::delete($old_image);
                }
            $new_image = time().'.'.$request->image->extension();
            $request->image->move(public_path('images_category'),$new_image);    
            $category->image = $new_image;
        }
        $category->title = $request->title;
        $category->desc = $request->desc;
        $category->update();
        return redirect('/category');

    }

    public function destroy($id){
        $category = Category::find($id);
        $image_path = 'images_category/'.$category->image;
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $category->delete();
        return redirect('/category');
    }
}
