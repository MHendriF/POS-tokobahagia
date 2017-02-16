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

class PurchaseOrderController extends Controller
{
    public function index()
	{
		$data = Supplier::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('employees.purchase_order', compact('data', 'data2', 'data3'));
	}

	 public function postPurchaseOrder(Request $request)
    {
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
		$order_date     = $request->get('order_date');
		$time           = strtotime($order_date);
		$newformat1     = date('Y-m-d',$time);
		
		$order_required = $request->get('order_required');
		$time           = strtotime($order_required);
		$newformat2     = date('Y-m-d',$time);
		
		$order_promised = $request->get('order_promised');
		$time           = strtotime($order_promised);
		$newformat3     = date('Y-m-d',$time);
		
		$ship_date      = $request->get('ship_date');
		$time           = strtotime($ship_date);
		$newformat4     = date('Y-m-d',$time);

        $purchase = new Purchase_Order(array(
			'supplier_id'    => $request->get('supplier_id'),
			'shipping_id'    => $request->get('shipping_id'),
			'po_detail_id'   => $lastPurchase,
			'po_number'      => $request->get('po_number'),
			'po_description' => $request->get('po_description'),
			'order_date'     => $newformat1,
			'order_required' => $newformat2,
			'order_promised' => $newformat3,
			'ship_date'      => $newformat4,
			'freight_charge' => $request->get('freight_charge')
        ));

        $purchase->save();
        return redirect()->to('po_list');
    }

    public function poList()
    {
    	$data = Purchase_Order::all();
    	return view('employees.purchase_order_list', compact('data'));
    }
}
