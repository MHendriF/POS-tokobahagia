<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use App\Product;
use App\Main_Transaction;
use App\Transaction_description;
use Session;

class MainTransactionController extends Controller
{
    public function index()
    {
        $data = Main_Transaction::all();
        return view('employees.transaction.transaction', compact('data'));
    }

    public function create()
    {
        $data = Product::all();
        $data2 = Transaction_description::all();
        return view('employees.transaction.add_transaction', compact('data','data2'));
    }

    public function store(Request $request)
    {
        // Main_Transaction::create($request->all());
        // return redirect('transaction');

        try{
            $this->validate($request, array(
                'user_id'          => 'required',
                'trans_desc_id'    => 'required',
                'product_id'       => 'required',
                'description'      => 'required',
                'transaction_date' => 'required',
                'unit_order'       => 'required',
                'quantity_out'     => 'required',
                'note'             => 'required',
                'cost_price'       => 'required'
            ));
            
            $transaction_date = $request->get('transaction_date');
            $time             = strtotime($transaction_date);
            $newformat        = date('Y-m-d',$time);
            
            $transaction = new Main_Transaction(array(
                'user_id'          => $request->get('user_id'),
                'trans_desc_id'    => $request->get('trans_desc_id'),
                'product_id'       => $request->get('product_id'),
                'description'      => $request->get('description'),
                'transaction_date' => $newformat,
                'unit_order'       => $request->get('unit_order'),
                'quantity_out'     => $request->get('quantity_out'),
                'note'             => $request->get('note'),
                'cost_price'       => $request->get('cost_price'),
            ));

            if($transaction->save()){
                Session::flash('new', 'New transaction was successfully added!');
                return redirect('transaction');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Main_Transaction::find($id);
        return view('employees.transaction.edit_transaction', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Main_Transaction::find($id)->update($request->all());
        return redirect('transaction');
    }

    public function destroy($id)
    {

        if(Main_Transaction::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Transaction was successfully deleted!');
            return redirect('transaction');
        }
    }

    public function findPrice(Request $request){

        //it will get price if its id match with product id
        $p=Product::select('unit_price')->where('id',$request->id)->first();
        return response()->json($p);
    }
}
