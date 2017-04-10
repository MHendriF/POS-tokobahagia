<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Customer;
use App\Order;
use App\Order_Detail;
use App\Shipping;
use App\Product;

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
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('employees.order.add_order', compact('data', 'data2','data3'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                //Sale Detail
                'product_id'     => 'required',
                'number'       => 'required',
                'quantity'       => 'required',
                'price_per_unit' => 'required',
                'discount'       => 'required',
                'price_total'    => 'required',
                
                //Sale
                'customer_id'    => 'required',
                'shipping_id'    => 'required',
                'order_no'        => 'required',
                'shipping_date'  => 'required',
                'no_po_customer' => 'required',
                'description'    => 'required'
            ));

            //Checking Available Stock to Buy
            $id_product = $request->get('product_id');
            $data = Product::find($id_product);
            $current_stock = $data->stock - $request->get('quantity');
            if($current_stock < 0){
                return redirect()->back()->with('error', 'The stock is not enough. Please try again.');
            }

            //Add Order Detail Table First
            $order_detail = new Order_Detail(array(
                'product_id'     => $request->get('product_id'),
                'number'       => $request->get('number'),
                'quantity'       => $request->get('quantity'),
                'price_per_unit' => $request->get('price_per_unit'),
                'discount'       => $request->get('discount'),
                'price_total'    => $request->get('price_total')
            ));

            if($order_detail->save())
            {
                $lastOrder = $order_detail->id;
            }

            // Add Order Entry Table
            // Convert format date from MM/DD/YYYY to YYYY-MM-DD
            // $order = $request->get('order_date');
            // $time = strtotime($order);
            // $newformat = date('Y-m-d',$time);

            $orders = new Order(array(
                'customer_id'    => $request->get('customer_id'),
                'shipping_id'    => $request->get('shipping_id'),
                'order_detail_id' => $lastOrder,
                'order_no'        => $request->get('order_no'),
                'shipping_date'  => $request->get('shipping_date'),
                'no_po_customer' => $request->get('no_po_customer'),
                'description'    => $request->get('description')
            ));

            if($orders->save()){
                Session::flash('new', 'New Order was successfully added!');
                return redirect('order');
            }
            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        }
            
    }

    public function show($id)
    {
        //$data = Product::all();
       // $data = Order_Detail::find($id);
        //$data = Order_Detail::all();
        //return view('employees.order.detail_order', compact('data'));
       // return view('employees.order.detail_order', ['data' => $data]);

        //select * from user where id = $id
        //$model = User::find($id);
        //return view('manage_edit_account')->with('data', $model);

        // $model = DB::select("SELECT pro.product_name as pid, od.quantity_in as qin, od.quantity_out as qout, od.line_total as total, od.discount as dist, od.grand_total as grand, od.price_ref as price
        //     FROM order_details as od, orders as o, products as pro
        //     WHERE o.order_detail_id = '$id' and o.order_detail_id = od.id and pro.id = od.product_id");
        // return view('employees.sale.detail_sale', ['data' => $model]);
    }

    public function edit($id)
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
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
                Session::flash('new', 'Product was successfully updated!');
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
        $data2 = Order_Detail::find($id);
        return view('employees.order.detail_order_v2', compact('data','data2'));
    }

}
