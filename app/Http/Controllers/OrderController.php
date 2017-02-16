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

class OrderController extends Controller
{
	public function index()
	{
		$data = Customer::all();
        $data2 = Shipping::all();
        return view('employees.order', compact('data', 'data2'));
	}

    public function orderV2()
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('employees.orderV2', compact('data', 'data2','data3'));
    }

    public function orderV3()
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        return view('employees.orderV3', compact('data', 'data2'));
    }

    public function postOrderAndDetail(Request $request)
    {
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
            //'order_detail_id' => intval(Order_Detail::where())
            'order_no'          => $request->get('order_no'),
            'order_date'        => $newformat,
            'po_number'         => $request->get('po_number'),
            'freight_charge'    => $request->get('freight_charge'),
            'sales_tax_rate_po' => $request->get('sales_tax_rate_po')
        ));

        $orders->save();
        return redirect()->to('order_list');
    }

    public function postOrder(Request $request)
    {
        //Order::create($request->all());
        //dd($request->all());

    	// Convert format date from MM/DD/YYYY to YYYY-MM-DD
        $order = $request->get('order_date');
        $time = strtotime($order);
        $newformat = date('Y-m-d',$time);

        $orders = new Order(array(
            'customer_id' => $request->get('customer_id'),
            'shipping_id' => $request->get('shipping_id'),
            // 'order_detail_id' => $request->get('order_detail_id'),
            'order_no' => $request->get('order_no'),
            'order_date' => $newformat,
            'po_number' => $request->get('po_number'),
            'freight_charge' => $request->get('freight_charge'),
            'sales_tax_rate_po' => $request->get('sales_tax_rate_po')
        ));

        $orders->save();
        return redirect()->to('order'); 
        //dd($orders->'id');
    }

    public function postOrderDetail(Request $request, $id)
    {
        
        $orders_detail = new Order_Detail(array(
            'product_id' => $request->get('product_id'),
            'quantity_in' => $request->get('quantity_in'),
            'quantity_out' => $request->get('quantity_out'),
            'line_total' => $request->get('line_total'),
            'discount' => $request->get('discount'),
            'grand_total' => $request->get('grand_total'),
            'price_ref' => $request->get('price_ref')
        ));
        $orders_detail->save();

        //cara lain
        $table = Order::find($id);
        $table->order_detail_id = $id;
        $table->save();
        return redirect()->to('order_list');

    }

    public function orderList()
    {
    	$data = Order::all();
    	return view('employees.order_list', compact('data'));
    }

    public function show($id)
    {
        $data = Product::all();
        $data2 = Order::find($id);
    	return view('employees.order_detail', compact('data','data2'));
    }

    public function orderDetailList()
    {
        $data = Order_Detail::all();
    	return view('employees.order_detail_list', compact('data'));
    }
}
