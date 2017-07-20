<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Customer;
use App\Order;
use App\Order_Detail;
use App\Shipping;
use App\Inventory;
use Carbon\Carbon;
use Session;
use DB;

class OrderController extends Controller
{
	public function index()
    {
        $data = Order::all();
        return view('employees.order.order', compact('data'));
    }

    public function create()
    {
        $last_record = DB::table('orders')->select('order_code')->orderBy('id', 'desc')->first();
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

        $code = "ORD";
        $date = Carbon::now();
        $timestamp = strtotime($date);
        $month = date("m", $timestamp);
        $year = date("y", $timestamp);
        $codes = $code."".$month."".$year;

        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Inventory::all();
        return view('employees.order.add_order_v2', compact('data', 'data2','data3','codes','inc'));
    }

    public function store(Request $request)
    {
        try{
            //dd($request->all());
            $this->validate($request, array(
                //Order
                'user_id'        => 'required',
                'customer_id'    => 'required',
                'shipping_id'    => 'required',
                'order_code'     => 'required',
                'shipping_date'  => 'required',
                'no_po_customer' => 'required'
            ));

            $orders = new Order(array(
                'user_id'        => $request->get('user_id'),
                'customer_id'    => $request->get('customer_id'),
                'shipping_id'    => $request->get('shipping_id'),
                'order_code'     => $request->get('order_code'),
                'shipping_date'  => $request->get('shipping_date'),
                'no_po_customer' => $request->get('no_po_customer'),
                'price_total'    => $request->get('price_total'),
                'description'    => $request->get('description')
            ));

            if($orders->save())
            {
                $lastOrder = $orders->id;
                foreach ($request->product_id as $key => $val) {
                    $data = array('order_id'=>$lastOrder,
                                  'product_id'=>$val,
                                  'number'=>$key+1,
                                  'quantity'=>$request->quantity[$key],
                                  'price_per_unit'=>$request->price_per_unit[$key],
                                  'discount'=>$request->discount[$key],
                                  'price'=>$request->price[$key]);
                    
                    // cek apakah stoknya mencukupi
                    $inven = Inventory::find($val);
                    $current_stock = $inven->stock - $request->quantity[$key];
                    if($current_stock < 0){
                        return redirect()->back()->with('error', 'The stock is not enough. Please try again.');
                    }

                    Order_Detail::insert($data);
                }
            }

            Session::flash('new', 'New Order was successfully added!');
            return redirect()->to('order');
            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        }
            
    }

    public function show($id)
    {
        $data = Order::find($id);
        $data2 = Order_Detail::all()->where('order_id',$id);
        return view('employees.order.detail_order', compact('data','data2'));
    }

    public function edit($id)
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Inventory::all();
        return view('employees.order.edit_order', compact('data', 'data2','data3'));
    }

    public function update(Request $request, $id)
    {
         try{
            $this->validate($request, array(
                //Sale Detail
                'product_id'     => 'required',
                'quantity'       => 'required',
                'price_per_unit' => 'required',
                'discount'       => 'required',
                'price_total'    => 'required',
                
                //Sale
                'customer_id'    => 'required',
                'shipping_id'    => 'required',
                'sale_no'        => 'required',
                'shipping_date'  => 'required',
                'no_po_customer' => 'required',
                'description'    => 'required'
            ));
            
            if(Order::find($id)->update($request->all())){
                Session::flash('new', 'New order was successfully updated!');
                return redirect('order');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        } 

    }

    public function destroy($id)
    {
        if(Order::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Order was successfully deleted!');
            return redirect('order');
        }
    }

    public function detailOrder($id)
    {

        $data = Order::find($id);
        $data2 = Order_Detail::all()->where('order_id',$id);
        return view('employees.order.detail_order_v2', compact('data','data2'));
    }

    public function findPrice(Request $request){

        //it will get price if its id match with product id
        $data =  Inventory::select('cost_min','stock')->where('id',$request->id)->first();
        return response()->json($data);
    }

}
