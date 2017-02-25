<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_item;
use Session;

class ServiceItemController extends Controller
{
    public function index()
    {
        $data = Service_Item::all();
        return view('service_item.service_item', compact('data'));
    }

    public function create()
    {
        return view('service_item.add_service_item');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
				'serv_item_no' => 'required',
				'serv_item' => 'required',
				'act_price' => 'required',
				'quantity_in' => 'required',
				'quantity_out' => 'required'
            ));
            
            if(Service_Item::create($request->all())){
                Session::flash('new', 'New service item was successfully added!');
                return redirect('service_item');
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
        $data = Service_Item::find($id);
        return view('service_item.edit_service_item', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'serv_item_no' => 'required|numeric',
				'serv_item' => 'required',
				'act_price' => 'required|numeric',
				'quantity_in' => 'required|numeric',
				'quantity_out' => 'required|numeric'
            ));
            
            if(Service_Item::find($id)->update($request->all())){
                Session::flash('new', 'Service item was successfully updated!');
                return redirect('service_item');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Service_Item::find($id)->delete())
        {
            Session::flash('delete', 'Service item was successfully deleted!');
            return redirect('service_item');
        }  
    }
}


