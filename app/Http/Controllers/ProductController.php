<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' =>'required|string|max:50',
            'descripion' =>'required',
            'precio'=>'required|numeric',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'El producto fue creado correctamente');
    }
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $product){
        $request->validate([
            'name'=> 'required|string|max:50',
            'descripion' => 'required',
            'precio' => 'required|numeric',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'El producto fue modificado correctamete');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index')->with('success', 'El producto fue eliminado correctamente');
    }
    public function  show(Product $product){
        return view('products.show', compact('product'));
    }
}