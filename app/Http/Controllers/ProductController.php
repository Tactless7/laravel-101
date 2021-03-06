<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex($id){
      $product = \App\Product::find($id);
      return view('product.show', ['product' => $product]);
    }

    public function getAll(){
        $products = \App\Product::all();
        return view('product.all', ['products' => $products]);
    }

    public function sell($id){
      $product = \App\Product::find($id);
      $product->stock--;
      $product->save();
      return back();
    }

    public function restock($id){
      $product = \App\Product::find($id);
      $product->stock++;
      $product->save();
      return back();
    }

    public function add(Request $request){
      $product = new Product;
      $product->name = $request->name;
      $product->price = $request->price;
      $product->stock = $request->stock;
      $product->description = $request->description;
      $product->save();
      return redirect()->route('home');
    }

    public function delete($id){
        $product = \App\Product::find($id);
        $product->delete();
        return redirect()->route('home');
    }

    public function edit(Request $request, $id){
        $product = \App\Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('home');
    }

    public function asyncRestock($id){
        $product = \App\Product::find($id);
        $product->stock++;
        $product->save();
        return response()->json(['stock' => $product->stock]);
    }

    public function asyncSell($id){
      $product = \App\Product::find($id);
      $product->stock--;
      $product->save();
      return response()->json(['stock' => $product->stock]);
    }
}
