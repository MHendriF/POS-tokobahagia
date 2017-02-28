<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceStatus;
use Session;

class ServiceStatusController extends Controller
{
    public function index()
    {
        $data = ServiceStatus::all();
        return view('service_status.service_status', compact('data'));
    }

    public function create()
    {
        return view('service_status.add_service_status');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
				'status' => 'required'
            ));
            
            if(ServiceStatus::create($request->all())){
                Session::flash('new', 'New service status was successfully added!');
                return redirect('service_status');
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
        $data = ServiceStatus::find($id);
        return view('service_status.edit_service_status', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'status' => 'required'
            ));
            
            if(ServiceStatus::find($id)->update($request->all())){
                Session::flash('new', 'Service status was successfully updated!');
                return redirect('service_status');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(ServiceStatus::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Service status was successfully deleted!');
            return redirect('service_status');
        }  
    }
}
