<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\ServiceStatus;
use App\Service_item;
use App\Technician;
use App\User;
use Sentinel;
use Image;
use Session;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('service.service', compact('data'));
    }

    public function create()
    {
        $data = Technician::all();
        $data2 = Service_item::all();
        $data3 = ServiceStatus::all();
        return view('service.add_service_v2', compact('data','data2','data3'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'user_id'        => 'required',
                'technician_id'  => 'required',
                'serv_item_id'   => 'required',
                'serv_status_id' => 'required',
                'cust_name'      => 'required',
                'cust_addr'      => 'required',
                'cust_phone'     => 'required',
                'entry_date'     => 'required',
                'item_desc'      => 'required',
                'item_serial'    => 'required',
                'item_damage'    => 'required',
                'item_images'    => 'required',
                'warranty'       => 'required',
                'collect_date'   => 'required',
                'tech_fee'       => 'required',
                'serv_fee'       => 'required',
                'trans_fee'      => 'required',
                'discount'       => 'required'
            ));

            $service = new Service(array(
                'user_id'        => $request->get('user_id'),
                'technician_id'  => $request->get('technician_id'),
                'serv_item_id'   => $request->get('serv_item_id'),
                'serv_status_id' => $request->get('serv_status_id'),
                'cust_name'      => $request->get('cust_name'),
                'cust_addr'      => $request->get('cust_addr'),
                'cust_phone'     => $request->get('cust_phone'),
                'entry_date'     => $request->get('entry_date'),
                'item_desc'      => $request->get('item_desc'),
                'item_serial'    => $request->get('item_serial'),
                'item_damage'    => $request->get('item_damage'),
                'warranty'       => $request->get('warranty'),
                'collect_date'   => $request->get('collect_date'),
                'tech_fee'       => $request->get('tech_fee'),
                'serv_fee'       => $request->get('serv_fee'),
                'trans_fee'      => $request->get('trans_fee'),
                'discount'       => $request->get('discount')
            ));


            //cara 2
            if($request->hasFile('item_images'))
            {
                $item_images = $request->file('item_images');
                $fileName = time() . '.' . $item_images->getClientOriginalExtension();
                $location = public_path('/images/services/' . $fileName);
                Image::make($item_images)->resize(360, 240)->save($location);

                $service->item_images = $fileName;
                // $service->save();
            }
            
            if($service->save())
            {
                Session::flash('new', 'Shipping was successfully added!');
                return redirect('service');
            }         
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }

        //dd($request->all()); 
    }

    public function show($id)
    {
        $data = Service::find($id);
        return view('service.detail_service', compact('data'));
    }

    public function edit($id)
    {
        $data = Service::find($id);
        $data2 = Technician::all();
        $data3 = Service_item::all();
        $data4 = ServiceStatus::all();
        return view('service.edit_service', compact('data','data2','data3','data4'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'user_id'       => 'required',
                //'technician_id' => 'required',
                //'serv_item_id'  => 'required',
                'serv_status_id' => 'required',
                'cust_name'      => 'required',
                'cust_addr'      => 'required',
                'cust_phone'     => 'required',
                'entry_date'     => 'required',
                'item_desc'      => 'required',
                'item_serial'    => 'required',
                'item_damage'    => 'required',
                // 'item_images'    => 'required',
                'warranty'       => 'required',
                'collect_date'   => 'required',
                'tech_fee'       => 'required',
                'serv_fee'       => 'required',
                'trans_fee'      => 'required',
                'discount'       => 'required'
            ));
            
            if(Service::find($id)->update($request->all())){
                Session::flash('new', 'Service was successfully updated!');
                return redirect('service');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Service::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Service was successfully deleted!');
            return redirect('service');
        }  
    }
}
