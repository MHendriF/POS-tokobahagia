<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Session;

class LocationController extends Controller
{
    public function index()
    {
        $data = Location::all();
        return view('admins.location.location', compact('data'));
    }

    public function create()
    {
        return view('admins.location.add_location');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'location'   => 'required'
            ));
            
            if(Location::create($request->all())){
                Session::flash('new', 'Location was successfully added!');
                return redirect('location');
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
        $data = Location::find($id);
        return view('admins.location.edit_location', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'location'   => 'required'
            ));

            if(Location::find($id)->update($request->all())){
                Session::flash('update', 'Location data was successfully updated!');
                return redirect('location');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Location::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Location was successfully deleted!');
            return redirect('location');
        }   
    }
}
