<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Customer;
use App\Order;
use App\Shipping;
use App\Product;
use App\Order_Detail;
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
                'product_id'        => 'required',
                'quantity_in'       => 'required',
                'quantity_out'      => 'required',
                'line_total'        => 'required',
                'discount'          => 'required',
                'grand_total'       => 'required',
                'price_ref'         => 'required',
                ///
                'customer_id'       => 'required',
                'shipping_id'       => 'required',
                // 'order_detail_id'   => 'required',
                'order_no'          => 'required',
                'order_date'        => 'required',
                'po_number'         => 'required',
                'freight_charge'    => 'required',
                'sales_tax_rate_po' => 'required'
            ));

            // Add Order Detail Table First
            $orders_detail = new Order_Detail(array(
                'product_id'   => $request->get('product_id'),
                'quantity_in'  => $request->get('quantity_in'),
                'quantity_out' => $request->get('quantity_out'),
                'line_total'   => $request->get('line_total'),
                'discount'     => $request->get('discount'),
                'grand_total'  => $request->get('grand_total'),
                'price_ref'    => $request->get('price_ref')
            ));
            
            if($orders_detail->save())
            {
                $lastOrder = $orders_detail->id;
            }

            // Add Order Entry Table
            // Convert format date from MM/DD/YYYY to YYYY-MM-DD
            $order = $request->get('order_date');
            $time = strtotime($order);
            $newformat = date('Y-m-d',$time);

            $orders = new Order(array(
                'customer_id'       => $request->get('customer_id'),
                'shipping_id'       => $request->get('shipping_id'),
                'order_detail_id'   => $lastOrder,
                'order_no'          => $request->get('order_no'),
                'order_date'        => $newformat,
                'po_number'         => $request->get('po_number'),
                'freight_charge'    => $request->get('freight_charge'),
                'sales_tax_rate_po' => $request->get('sales_tax_rate_po')
            ));

            if($orders->save()){
                Session::flash('new', 'New order was successfully added!');
                return redirect('order');
            }
            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
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

        $model = DB::select("SELECT pro.product_name as pid, od.quantity_in as qin, od.quantity_out as qout, od.line_total as total, od.discount as dist, od.grand_total as grand, od.price_ref as price
            FROM order_details as od, orders as o, products as pro
            WHERE o.order_detail_id = '$id' and o.order_detail_id = od.id and pro.id = od.product_id");
        return view('employees.order.detail_order', ['data' => $model]);
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
                'product_id'        => 'required',
                'quantity_in'       => 'required',
                'quantity_out'      => 'required',
                'line_total'        => 'required',
                'discount'          => 'required',
                'grand_total'       => 'required',
                'price_ref'         => 'required',
                ///
                'customer_id'       => 'required',
                'shipping_id'       => 'required',
                'order_detail_id'   => 'required',
                'order_no'          => 'required',
                'order_date'        => 'required',
                'po_number'         => 'required',
                'freight_charge'    => 'required',
                'sales_tax_rate_po' => 'required'
            ));
            
            if(Order::find($id)->update($request->all())){
                Session::flash('new', 'Product was successfully updated!');
                return redirect('order');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 

    }

    public function destroy($id)
    {
        if(Order::find($id)->delete())
        {
            Session::flash('delete', 'Order was successfully deleted!');
            return redirect('order');
        }
    }
}
