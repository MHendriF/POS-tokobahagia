<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Location;

class ProductController extends Controller
{
  
    public function index()
    {
        $data = Product::all();
        return view('admins.product.product', compact('data'));
    }

    public function productv2()
    {
        $data = Category::all();
        $data2 = Location::all();
        return view('admins.product.add_productV2', compact('data','data2'));
    }

    public function create()
    {
        $data = Category::all();
        $data2 = Location::all();
        return view('admins.product.add_product', compact('data','data2'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('product');
        //dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $data2 = Category::all();
        $data3 = Location::all();
        return view('admins.product.edit_product', compact('data','data2','data3'));
    }


    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->all());
        return redirect('product');
    }


    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('product');
    }
}
