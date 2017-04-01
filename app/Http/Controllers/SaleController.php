<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Customer;
use App\Sale;
use App\Shipping;
use App\Product;
use App\Sale_Detail;
use Session;
use DB;

class SaleController extends Controller
{
	public function index()
    {
        $data = Sale::all();
        return view('employees.sale.sale', compact('data'));
    }

    public function create()
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('employees.sale.add_sale', compact('data', 'data2','data3'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                //Sale Detail
                'product_id'     => 'required',
                'quantity'       => 'required',
                'price_per_unit' => 'required',
                'discount'       => 'required',
                'price_total'    => 'required',
                //'price_ref'      => 'required',
                
                //Sale
                'customer_id'    => 'required',
                'shipping_id'    => 'required',
                'sale_no'        => 'required',
                'shipping_date'  => 'required',
                'no_po_customer' => 'required',
                'description'    => 'required'
            ));

            // Add Order Detail Table First
            $sale_detail = new Sale_Detail(array(
                'product_id'     => $request->get('product_id'),
                'quantity'       => $request->get('quantity'),
                'price_per_unit' => $request->get('price_per_unit'),
                'discount'       => $request->get('discount'),
                'price_total'    => $request->get('price_total')
                //'price_ref'      => $request->get('price_ref')
            ));

            if($sale_detail->save())
            {
                $lastSale = $sale_detail->id;
            }

            // Add Order Entry Table
            // Convert format date from MM/DD/YYYY to YYYY-MM-DD
            // $order = $request->get('order_date');
            // $time = strtotime($order);
            // $newformat = date('Y-m-d',$time);

            $sales = new Sale(array(
                'customer_id'    => $request->get('customer_id'),
                'shipping_id'    => $request->get('shipping_id'),
                'sale_detail_id' => $lastSale,
                'sale_no'        => $request->get('sale_no'),
                'shipping_date'  => $request->get('shipping_date'),
                'no_po_customer' => $request->get('no_po_customer'),
                'description'    => $request->get('description')
            ));

            if($sales->save()){
                Session::flash('new', 'New Sale was successfully added!');
                return redirect('sale');
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
        return view('employees.sale.edit_sale', compact('data', 'data2','data3'));
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
            
            if(Sale::find($id)->update($request->all())){
                Session::flash('new', 'Product was successfully updated!');
                return redirect('sale');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 

    }

    public function destroy($id)
    {
        if(Sale::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Order was successfully deleted!');
            return redirect('sale');
        }
    }
}
