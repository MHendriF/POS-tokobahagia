<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Location;
use Image;

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
        //return view('admins.product.add_product', compact('data','data2'));
        return view('testing.tes-product', compact('data','data2'));
    }

    public function store(Request $request)
    {
        //Product::create($request->all());
        //return redirect('product');
        //dd($request->all());
            
        $product = new Product(array(
            'category_id'     => $request->get('category_id'),
            'location_id'     => $request->get('location_id'),
            'product_name'    => $request->get('product_name'),
            'product_desc'    => $request->get('product_desc'),
            'manufacturer'    => $request->get('manufacturer'),
            'item_use'        => $request->get('item_use'),
            'unit_price'      => $request->get('unit_price'),
            'unit_price2'     => $request->get('unit_price2'),
            'avg_cost'        => $request->get('avg_cost'),
            'reorder_lvl'     => $request->get('reorder_lvl'),
            'discontinueted'  => $request->get('discontinueted'),
            'lead_time'       => $request->get('lead_time'),
            'pri_vendor'      => $request->get('pri_vendor'),
            'sec_vendor'      => $request->get('sec_vendor'),
            'unit_of_hand'    => $request->get('unit_of_hand'),
            'unit_of_measure' => $request->get('unit_of_measure')
        ));

        //cara 1
        // $file       = $request->file('images');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('images')->move("products/", $fileName);
        // $product->images = $fileName;
        // $product->save();

        //cara 2
        if($request->hasFile('images'))
        {
            $image = $request->file('images');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/products/' . $fileName);
            Image::make($image)->resize(100, 100)->save($location);

            $product->images = $fileName;
            $product->save();
        }
        return redirect('product');

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
