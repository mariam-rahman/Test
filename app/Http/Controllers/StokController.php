<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view('stoks/index',compact('stocks'));
    }

    public function create(){
        return view('stoks.create');
    }

    public function store(Request $request){

        $request->validate([
            'stock_type'=>'required',
            'category_id'=>'required'
        ]);
        $stock = new Stock();
        $stock->stock_type = $request->stock_type;
        $stock->qty = $request->qty;
        $stock->price = $request->price;
        $stock->product_name = $request->product_name;
        $stock->category_id = $request->category_id;

        $stock->save();

        return redirect('/stok');
    }

    public function edit(){
        return "display a form to eidt";
    }

    public function update(){

        return "process of the updating";
    }

    public function destroy(){
        return "delete the data";
    }
}
