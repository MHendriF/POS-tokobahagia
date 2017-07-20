<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;


class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('employees.customer.customer', compact('data'));
    }

    public function create()
    {
        return view('employees.customer.add_customer');
    }

    public function store(Request $request)
    {
      	try{
            $this->validate($request, array(
				'contact_title'   => 'required',
				'contact_name'    => 'required',
				'phone'           => 'required',
				'fax'             => 'required',
                'email'           => 'required',
				'address'         => 'required',
				'postal_code'     => 'required',
				'city'            => 'required',
				'province'        => 'required',
				'country'         => 'required',
				'billing_address' => 'required',
				'additional_info' => 'required'
            ));
            
            if(Customer::create($request->all())){
                Session::flash('new', 'New Customer was successfully added!');
                return redirect('customer');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
    }

    public function show($id)
    {
        $data = Customer::find($id);
        return view('employees.customer.detail_customer', compact('data'));
    }

    public function edit($id)
    {
        $data = Customer::find($id);
        return view('employees.customer.edit_customer', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'contact_title'   => 'required',
				'contact_name'    => 'required',
				'phone'           => 'required',
				'fax'             => 'required',
                'email'           => 'required',
				'address'         => 'required',
				'postal_code'     => 'required',
				'city'            => 'required',
				'province'        => 'required',
				'country'         => 'required',
				'billing_address' => 'required',
				'additional_info' => 'required'
            ));

            if(Customer::find($id)->update($request->all())){
                Session::flash('update', 'Customer data was successfully updated!');
                return redirect('customer');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Customer::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Customer was successfully deleted!');
            return redirect('customer');
        } 
    }

}
