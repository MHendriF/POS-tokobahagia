<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Supplier;
use App\Purchase_Order;
use App\Purchase_Order_Detail;
use App\Shipping;
use App\Product;
use Session;

class PurchaseOrderController extends Controller
{
    public function index()
	{
		$data = Purchase_Order::all();
    	return view('employees.purchase_order.porder', compact('data'));
	}

	 public function create()
    {
        $data = Supplier::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('employees.purchase_order.add_porder', compact('data', 'data2','data3'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
            	//Purchase Order
            	'user_id'		 => 'required',
				'supplier_id'    => 'required',
				'shipping_id'    => 'required',
				//'po_detail_id'   => 'required',
				'po_number'      => 'required',
				'po_description' => 'required',
				'order_date'     => 'required',
				'order_required' => 'required',
				'order_promised' => 'required',
				'ship_date'      => 'required',
				'freight_charge' => 'required',

				//Purchase Order Detail
				'product_id'     => 'required',
				'po_item_number' => 'required',
				'quantity_in'    => 'required',
				'quantity_out'   => 'required',
				'unit_cost'      => 'required',
				'line_total'     => 'required',
				'discount'       => 'required'
            ));

            // Add Order Detail Table First
	        $purchase_order = new Purchase_Order_Detail(array(
				'product_id'   => $request->get('product_id'),
				'po_item_number'  => $request->get('po_item_number'),
				'quantity_in'  => $request->get('quantity_in'),
				'quantity_out' => $request->get('quantity_out'),
				'unit_cost'    => $request->get('unit_cost'),
				'line_total'   => $request->get('line_total'),
				'discount'     => $request->get('discount')
	        ));
	        
	        if($purchase_order->save())
	        {
	            $lastPurchase = $purchase_order->id;
	        }

	        // Add Purchase Order Entry Table
	        // Convert format date from MM/DD/YYYY to YYYY-MM-DD
			// $order_date     = $request->get('order_date');
			// $time           = strtotime($order_date);
			// $newformat1     = date('Y-m-d',$time);
			
			// $order_required = $request->get('order_required');
			// $time           = strtotime($order_required);
			// $newformat2     = date('Y-m-d',$time);
			
			// $order_promised = $request->get('order_promised');
			// $time           = strtotime($order_promised);
			// $newformat3     = date('Y-m-d',$time);
			
			// $ship_date      = $request->get('ship_date');
			// $time           = strtotime($ship_date);
			// $newformat4     = date('Y-m-d',$time);

	        $purchase = new Purchase_Order(array(
	        	'user_id'		 => $request->get('user_id'),
				'supplier_id'    => $request->get('supplier_id'),
				'shipping_id'    => $request->get('shipping_id'),
				'po_detail_id'   => $lastPurchase,
				'po_number'      => $request->get('po_number'),
				'po_description' => $request->get('po_description'),
				'order_date'     => $request->get('order_date'),
				'order_required' => $request->get('order_required'),
				'order_promised' => $request->get('order_promised'),
				'ship_date'      => $request->get('ship_date'),
				'freight_charge' => $request->get('freight_charge')
	        ));

	       if($purchase->save()){
	       		Session::flash('new', 'New Purchase Order was successfully added!');
		        return redirect()->to('purchase_order');
	       }
	            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
            
    }

    public function show($id)
    {

        // $model = DB::select("SELECT pro.product_name as pid, od.quantity_in as qin, od.quantity_out as qout, od.line_total as total, od.discount as dist, od.grand_total as grand, od.price_ref as price
        //     FROM order_details as od, orders as o, products as pro
        //     WHERE o.order_detail_id = '$id' and o.order_detail_id = od.id and pro.id = od.product_id");
        // return view('employees.order.detail_order', ['data' => $model]);
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
        // if(Order::find($id)->delete())
        // {
        //     Session::flash('delete', 'Order was successfully deleted!');
        //     return redirect('order');
        // }
    }

}
