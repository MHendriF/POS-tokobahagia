<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use Session;

class ShippingController extends Controller
{
   
    public function index()
    {
        $shippings = Shipping::all();
        return view('admins.shipping.index', compact('shippings'));
    }

    public function create()
    {
        return view('admins.shipping.create');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'method'   => 'required'
            ));
            
            if(Shipping::create($request->all())){
                Session::flash('new', 'Shipping was successfully added!');
                return redirect('shipping');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function edit($id)
    {
        $shippings = Shipping::find($id);
        return view('admins.shipping.edit', compact('shippings'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'method'   => 'required'
            ));
            
            if(Shipping::find($id)->update($request->all())){
                Session::flash('new', 'Shipping was successfully updated!');
                return redirect('shipping');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Shipping::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Shipping method was successfully deleted!');
            return redirect('shipping');
        }  
    }
}
