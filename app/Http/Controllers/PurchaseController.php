<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Supplier;
use App\Purchase;
use App\Purchase_Detail;
use App\Shipping;
use App\Inventory;
use App\Category;
use Session;
use DB;
use Carbon\Carbon;


class PurchaseController extends Controller
{
    public function index()
	{
		$data = Purchase::all();
    	return view('employees.purchase.purchase', compact('data'));
	}

	public function create()
    {
        $last_record = DB::table('purchases')->select('purchase_code')->orderBy('id', 'desc')->first();
        //var_dump($last_record);

        if($last_record == null)
        {
            //return "Masih Kosong";
            $n = 0000;
        }
        else
        {   
             //convert to array
             $array = json_decode(json_encode($last_record), true);
             //array to string
             $last_record = implode(" ",$array);
             $n = substr($last_record, -4);

        }

        //increament
        $inc = str_pad($n + 1, 4, 0, STR_PAD_LEFT);

        $code = "PRCS";
        $date = Carbon::now();
        $timestamp = strtotime($date);
        $month = date("m", $timestamp);
        $year = date("y", $timestamp);
        $codes = $code."".$month."".$year;


        $data = Supplier::all();
        $data2 = Shipping::all();
        $data3 = Inventory::all();
        return view('employees.purchase.add_purchase', compact('data', 'data2','data3','codes','inc'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        try{
            $this->validate($request, array(
                //Purchase
                'user_id'        => 'required',
                'supplier_id'    => 'required',
                'shipping_id'    => 'required',
                'purchase_code'  => 'required',
                'po_description' => 'required',
                'purchase_date'  => 'required',
                'promised_date'  => 'required',
                'shipping_date'  => 'required',
                'freight_charge' => 'required'
             ));

            
	        // Add Purchase  Table
	        $purchase = new Purchase(array(
                'user_id'        => $request->get('user_id'),
                'supplier_id'    => $request->get('supplier_id'),
                'shipping_id'    => $request->get('shipping_id'),
                'purchase_code'  => $request->get('purchase_code'),
                'po_description' => $request->get('po_description'),
                'purchase_date'  => $request->get('purchase_date'),
                'promised_date'  => $request->get('promised_date'),
                'shipping_date'  => $request->get('shipping_date'),
                'freight_charge' => $request->get('freight_charge'),
                'price_total' => $request->get('price_total')
	        ));

            if($purchase->save())
            {
                $lastPurchase = $purchase->id;
                //return "Success";
            }

            $number = $request->number;
            $product_id = $request->product_id;
            $quantity = $request->quantity;
            $price_per_unit = $request->price_per_unit;
            $discount = $request->discount;
            $price = $request->price;

            for($i=0; $i<count($number); $i++) 
            {
                $PD = new Purchase_Detail();
                $PD->number = $number[$i];
                $PD->product_id = $product_id[$i];
                $PD->purchase_id = $lastPurchase;
                $PD->quantity = $quantity[$i];
                $PD->price_per_unit = $price_per_unit[$i];
                $PD->discount = $discount[$i];
                $PD->price = $price[$i];

                //return jika tidak memasukkan produk lain
                if($number[$i] == null){
                    //return "Success v2";
                    Session::flash('new', 'New Purchase was successfully added!');
                    return redirect()->to('purchase');
                }

                else
                {
                    //cek jika apakah ada di tabel
                    // $cek = Purchase_Detail::where('product_id', '=', $product_id[$i])->first();
                    // if($cek === null) //jika tidak ada
                    // {
                    //     $product = Inventory::where('id', '=', $product_id[$i])->first();
                    //     //update status
                    //     if($product)
                    //     {
                    //         $product->cost_min = $price_per_unit[$i];
                    //         $product->cost_max = $price_per_unit[$i];
                    //         $product->price_buy_avg = $price_per_unit[$i];
                    //         $product->save();
                    //     }
                    // }

                    $PD->save();
                    // if(Purchase_Detail::where('product_id', '=', $product_id[$i])->count() > 1)
                    // {
                    //     $item_max = DB::table('purchase_details')
                    //                 ->where('product_id', '=', $product_id[$i])
                    //                 ->max('price_per_unit');
                    //     $item_min = DB::table('purchase_details')
                    //                 ->where('product_id', '=', $product_id[$i])
                    //                 ->min('price_per_unit');
                    //     $item_avg = DB::table('purchase_details')
                    //                 ->where('product_id', '=', $product_id[$i])
                    //                 ->avg('price_per_unit');

                    //     //cari produk
                    //     $product = Inventory::where('id', '=', $product_id[$i])->first();
                    //     //update status
                    //     if($product)
                    //     {
                    //         $product->cost_min = $item_min;
                    //         $product->cost_max = $item_max;
                    //         $product->price_buy_avg = $item_avg;
                    //         $product->save();
                    //     }

                    // }
                    
                }
            }
            Session::flash('new', 'New Purchase V2 was successfully added!');
            return redirect()->to('purchase');

            // return "Success";
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
            
    }

    public function show($id)
    {

        $data = Purchase::find($id);
        // $data2 = Purchase_Detail::all()->where('purchase_id',$id);
        // return view('employees.purchase.detail_purchase', compact('data','data2'));
        $data2 = DB::table('purchase_details')
            ->join('inventory', 'inventory.id', '=', 'purchase_details.purchase_id')
            ->join('categories', 'categories.id', '=', 'inventory.category_id')
            ->select('purchase_details.*', 'inventory.product_name', 'categories.category_name')
            ->where('purchase_id', '=', $id)
            ->get();
        return view('employees.purchase.detail_purchase', compact('data', 'data2'));
        //dd($data);
    }

    public function edit($id)
    {
        // $data = Customer::all();
        // $data2 = Shipping::all();
        // $data3 = Product::all();
        // return view('employees.order.edit_order', compact('data', 'data2','data3'));
    }

    public function update(Request $request, $id)
    {
        // try{
        //     $this->validate($request, array(
        //         'product_id'        => 'required',
        //         'quantity_in'       => 'required',
        //         'quantity_out'      => 'required',
        //         'line_total'        => 'required',
        //         'discount'          => 'required',
        //         'grand_total'       => 'required',
        //         'price_ref'         => 'required',
        //         ///
        //         'customer_id'       => 'required',
        //         'shipping_id'       => 'required',
        //         'order_detail_id'   => 'required',
        //         'order_no'          => 'required',
        //         'order_date'        => 'required',
        //         'po_number'         => 'required',
        //         'freight_charge'    => 'required',
        //         'sales_tax_rate_po' => 'required'
        //     ));
            
        //     if(Order::find($id)->update($request->all())){
        //         Session::flash('new', 'Product was successfully updated!');
        //         return redirect('order');
        //     }
        // } 
        // catch(\Exception $e){
        //     return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        // } 

    }

    public function destroy($id)
    {
        // if(Order::find($id)->delete())
        // {
        //     Session::flash('delete', 'Order was successfully deleted!');
        //     return redirect('order');
        // }
    }

    public function detailPurchase($id)
    {

        $data = Purchase::find($id);
        $data2 = Purchase_Detail::all()->where('purchase_id',$id);
        return view('employees.purchase.detail_purchase_v2', compact('data','data2'));
    }

}
