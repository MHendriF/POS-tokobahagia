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
                'code_factory'    => 'required',
                'product_desc'    => 'required',
                'manufacturer'    => 'required',
                'item_function'   => 'required',
                'unit_price_min'  => 'required',
                'unit_price_max'  => 'required',
                'price_buy_avg'   => 'required',
                'images'          => 'required',
                'stock'           => 'required',
                'unit_of_measure' => 'required'
            ));

            $product = new Product(array(
                'category_id'     => $request->get('category_id'),
                'location_id'     => $request->get('location_id'),
                'product_name'    => $request->get('product_name'),
                'code_factory'    => $request->get('code_factory'),
                'product_desc'    => $request->get('product_desc'),
                'manufacturer'    => $request->get('manufacturer'),
                'item_function'   => $request->get('item_function'),
                'unit_price_min'  => $request->get('unit_price_min'),
                'unit_price_max'  => $request->get('unit_price_max'),
                'price_buy_avg'   => $request->get('price_buy_avg'),
                'stock'           => $request->get('stock'),
                'unit_of_measure' => $request->get('unit_of_measure')
            ));

            //cara 2
            if($request->hasFile('images'))
            {
                $image = $request->file('images');
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('/images/products/' . $fileName);
                Image::make($image)->resize(300, 220)->save($location);

                $product->images = $fileName;
                //$product->save();
            }
            if($product->save())
            {
                Session::flash('new', 'New product was successfully added!');
                return redirect('product');
            }   
            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
            
    }

    public function show($id)
    {
        $data = Product::find($id);
        return view('admins.product.detail_product', compact('data'));
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
         try{
            $this->validate($request, array(
                'category_id'     => 'required',
                'location_id'     => 'required',
                'product_name'    => 'required',
                'code_factory'    => 'required',
                'product_desc'    => 'required',
                'manufacturer'    => 'required',
                'item_function'   => 'required',
                'unit_price_min'  => 'required',
                'unit_price_max'  => 'required',
                'price_buy_avg'   => 'required',
                //'images'          => 'required',
                'stock'           => 'required',
                'unit_of_measure' => 'required'
            ));
            
            if(Product::find($id)->update($request->all())){
                Session::flash('new', 'Product was successfully updated!');
                return redirect('product');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        } 

    }

    public function destroy($id)
    {
        if(Product::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Product was successfully deleted!');
            return redirect('product');
        }
    }

    public function findProduct(Request $request){

        //it will get price if its id match with product id
        $p=Product::select('unit_price_min','stock')->where('id',$request->id)->first();
        return response()->json($p);
    }

}
