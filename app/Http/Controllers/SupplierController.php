<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admins.supplier.index', compact('suppliers'));
    }

 
    public function create()
    {
        return view('admins.supplier.create');
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
        $suppliers = Supplier::find($id);
        return view('admins.supplier.detail', compact('suppliers'));
    }

    public function edit($id)
    {
        $suppliers = Supplier::find($id);
        return view('admins.supplier.edit', compact('suppliers'));
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
