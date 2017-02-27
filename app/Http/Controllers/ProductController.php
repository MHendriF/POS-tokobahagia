<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Location;
use Image;
use Session;

class ProductController extends Controller
{
  
    public function index()
    {
        $data = Product::all();
        return view('admins.product.product', compact('data'));
    }

    // public function productv2()
    // {
    //     $data = Category::all();
    //     $data2 = Location::all();
    //     return view('admins.product.add_productV2', compact('data','data2'));
    // }

    public function create()
    {
        $data = Category::all();
        $data2 = Location::all();
        return view('admins.product.add_product', compact('data','data2'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'category_id'     => 'required',
                'location_id'     => 'required',
                'product_name'    => 'required',
                'product_desc'    => 'required',
                'manufacturer'    => 'required',
                'item_use'        => 'required',
                'unit_price'      => 'required',
                'unit_price2'     => 'required',
                'avg_cost'        => 'required',
                'reorder_lvl'     => 'required',
                'discontinueted'  => 'required',
                'lead_time'       => 'required',
                'images'          => 'required',
                'pri_vendor'      => 'required',
                'sec_vendor'      => 'required',
                'unit_of_hand'    => 'required',
                'unit_of_measure' => 'required'
            ));

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
            Session::flash('new', 'New product was successfully added!');
            return redirect('product');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
            
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
        // return view('admins.product.edit_product', compact('data','data2','data3'));
        return view('admins.product.edit_productv2', compact('data','data2','data3'));
    }

    public function update(Request $request, $id)
    {
         try{
            $this->validate($request, array(
                'category_id'     => 'required',
                'location_id'     => 'required',
                'product_name'    => 'required',
                'product_desc'    => 'required',
                'manufacturer'    => 'required',
                'item_use'        => 'required',
                'unit_price'      => 'required',
                'unit_price2'     => 'required',
                'avg_cost'        => 'required',
                'reorder_lvl'     => 'required',
                'discontinueted'  => 'required',
                'lead_time'       => 'required',
                'images'          => 'required',
                'pri_vendor'      => 'required',
                'sec_vendor'      => 'required',
                'unit_of_hand'    => 'required',
                'unit_of_measure' => 'required'
            ));
            
            if(Product::find($id)->update($request->all())){
                Session::flash('new', 'Product was successfully updated!');
                return redirect('product');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 

    }

    public function destroy($id)
    {
        if(Product::find($id)->delete())
        {
            Session::flash('delete', 'Product was successfully deleted!');
            return redirect('product');
        }
    }

    public function deleteItem(Request $req) {
      dd($req->all());
      // Product::find($req->id)->delete();
      return redirect('home');
    }
}
