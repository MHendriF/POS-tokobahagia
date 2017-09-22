<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('employees.customer.index', compact('customers'));
    }

    public function create()
    {
        return view('employees.customer.create');
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
        $customers = Customer::find($id);
        return view('employees.customer.detail', compact('customers'));
    }

    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('employees.customer.edit', compact('customers'));
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
