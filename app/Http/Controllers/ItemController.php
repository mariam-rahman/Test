<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return "lists of items";
    }

    public function create(){

        return view('item/create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
        ]);

        if($request->image !="")
        {
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images_item'),$imageName);
        }
        $db_item = new Item();
        $db_item->name = $request->name;
        $db_item->qty = $request->qty;
        $db_item->desc =$request->desc;
        $db_item->price = $request->price;
        $db_item->image = $imageName;

        $db_item->save();
        return redirect('/item');
         
    }

    public function edit(){
        return "a form to eidt";
    }

    public function update(){
        return "process of update";
    }

    public function destroy(){
        return "delete";
    }
}
