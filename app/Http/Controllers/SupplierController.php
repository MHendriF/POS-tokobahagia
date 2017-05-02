<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::all();
        return view('admins.supplier.supplier', compact('data'));
    }

 
    public function create()
    {
        return view('admins.supplier.add_supplier');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'supplier_name' => 'required',
                'contact_title' => 'required',
                'contact_name'  => 'required',
                'phone'         => 'required',
                'fax'           => 'required',
                'email'         => 'required',
                'address'       => 'required',
                'postal_code'   => 'required',
                'city'          => 'required',
                'province'      => 'required',
                'country'       => 'required'
            ));
            
            if(Supplier::create($request->all())){
                Session::flash('new', 'New supplier was successfully added!');
                return redirect('supplier');
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
        $data = Supplier::find($id);
        return view('admins.supplier.edit_supplier', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'supplier_name' => 'required',
                'contact_title' => 'required',
                'contact_name'  => 'required',
                'phone'         => 'required',
                'fax'           => 'required',
                'email'         => 'required',
                'address'       => 'required',
                'postal_code'   => 'required',
                'city'          => 'required',
                'province'      => 'required',
                'country'       => 'required'
            ));
            
            if(Supplier::find($id)->update($request->all())){
                Session::flash('new', 'Supplier was successfully updated!');
                return redirect('supplier');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Supplier::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Supplier method was successfully deleted!');
            return redirect('supplier');
        }  
    }
}
