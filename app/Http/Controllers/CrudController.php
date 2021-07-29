<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function index()
    {
        $products = Product::paginate(10);
        return view('crud.pages.index', compact('products'));
    }

    function create()
    {
        return view('crud.pages.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'description'  => 'required',
            'price'        => 'required' 
        ]);

        // Product::create($request->all());

        $products = new Product();
        $products->product_name = $request->product_name;
        $products->description  = $request->description;
        $products->price        = $request->price;
        $save = $products->save();

        if($save){
            return back()->with('success', 'Product Added Successfuly!!');
        }else{
            return back()->with('fail', 'Product did not save!!');
        }

        function edit($id)
        {
            $products = Product::find($id);
            return view('crud.pages.edit')->with('products', $products);
        }

        function update(Request $request, $id)
        {
            $request->validate([
                'product_name' => 'required',
                'description'  => 'required',
                'price'        => 'required'
            ]);

            // Product::find($id)->update($request->only('product_name', 'description', 'price'));

            $products = Product::find('id');
            $products->product_name = $request->product_name;
            $products->description  = $request->description;
            $products->price        = $request->price;
            $update = $products->update();

            if($update){
                return redirect()->route('products.index')->with('success', 'Product Update Successfully!!');
            }else{
                return redirect()->route('products.index')->with('fail', 'Product not Update!!');
            }

        }

        function destroy($id)
        {
            $destroy = Product::find($id)->delete();

            if($destroy){
                return back()->with('success', 'Product Deleted Successfully!!');
            }else{
                return back()->with('fail', 'Product not Delete!!');
            }
        }
    }
}
