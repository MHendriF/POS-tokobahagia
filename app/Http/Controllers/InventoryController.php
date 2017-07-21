<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Category;
use App\Location;
use App\Purchase_Detail;
use Image;
use Session;
use DB;


class InventoryController extends Controller
{
    public function index()
    {
        $data = Inventory::all();
        $data2 = Category::all();
        return view('admins.inventory.inventory', compact('data','data2'));
    }

    public function create()
    {
        $data = Category::all();
        $data2 = Location::all();
        return view('admins.inventory.add_inventory', compact('data','data2'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        try{
            $this->validate($request, array(
                'category_id'     => 'required',
                'location_id'     => 'required',
                'product_name'    => 'required',
                'cost_min'        => 'required',
                'cost_max'        => 'required',
                'images'          => 'required',
                'unit_of_measure' => 'required'
            ));

            $product = new Inventory(array(
                'category_id'     => $request->get('category_id'),
                'location_id'     => $request->get('location_id'),
                'product_name'    => $request->get('product_name'),
                'code_factory'    => $request->get('code_factory'),
                'product_desc'    => $request->get('product_desc'),
                'manufacturer'    => $request->get('manufacturer'),
                'item_function'   => $request->get('item_function'),
                'cost_min'        => $request->get('cost_min'),
                'cost_max'        => $request->get('cost_max'),
                'price_buy_avg'   => "0",
                'stock'           => "0",
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
                return redirect('inventory');
            }   
            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
            
    }

    public function show($id)
    {
        $data = Inventory::find($id);
        return view('admins.inventory.detail_inventory', compact('data'));
    }

    public function edit($id)
    {
        $data = Inventory::find($id);
        $data2 = Category::all();
        $data3 = Location::all();
        return view('admins.inventory.edit_inventory', compact('data','data2','data3'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'category_id'     => 'required',
                'location_id'     => 'required',
                'product_name'    => 'required',
                'cost_min'  => 'required',
                'cost_max'  => 'required',
                'price_buy_avg'   => 'required',
                'stock'           => 'required',
                'unit_of_measure' => 'required'
            ));
            
            if(Inventory::find($id)->update($request->all())){
                Session::flash('new', 'New product was successfully updated!');
                return redirect('inventory');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        } 
        //dd($request->all());

    }

    public function destroy($id)
    {
        if(Inventory::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Product was successfully deleted!');
            return redirect('inventory');
        }
    }

    public function findProduct(Request $request){

        //it will get price if its id match with product id
        $p=Inventory::select('cost_min','stock')->where('id',$request->id)->first();
        return response()->json($p);
    }

    public function findCategory(Request $request){

        //it will get price if its id match with product id
        $p=Inventory::all()->where('category_id',$request->id)->first();
        return response()->json($p);
    }

    public function detailTransaction($id)
    {
        
        $data = DB::select("SELECT s.*, sa.order_code as order_code, l.location as location
            FROM order_details s, orders sa, locations l 
            WHERE s.product_id LIKE '$id' and sa.id = s.order_id and sa.location_id = l.id");

        $data2 = DB::select("SELECT p.*, pu.purchase_code as purchase_code, l.location as location
            FROM purchase_details p, purchases pu, locations l 
            WHERE p.product_id LIKE '$id' and pu.id = p.purchase_id and pu.location_id = l.id");

        return view('admins.inventory.detail_transaction', compact('data','data2'));

    }

    public function showbycategory(Request $request)
    {
        $id_category = $request['search'];

        $data3 = $id_category;
        $data3 = Category::find($id_category);
        $data2 = Category::all();
        $data = Inventory::all()->where('category_id',$id_category);
        return view('admins.inventory.inventory', compact('data','data2','data3'));
        //dd($data3);
        
    }

}
