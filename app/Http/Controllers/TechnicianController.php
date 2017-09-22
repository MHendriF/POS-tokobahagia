<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technician;
use Session;

class TechnicianController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();
        return view('admins.technician.index', compact('technicians'));
    }

    public function create()
    {
        return view('admins.technician.create');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'technician_name'     => 'required|max:10'
            ));

            if(Technician::create($request->all())){
                Session::flash('new', 'Technician was successfully added!');
                return redirect('technician');    
            }
        }
        catch(\Exception $e){
            //return redirect()->back()->with(['error' => 'Cannot add new Technician!']);
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
            //dd($e);
        }

    }

    public function edit($id)
    {
        $technicians = Technician::find($id);
        return view('admins.technician.edit', compact('technicians'));
    }

    public function update(Request $request, $id)
    {
        if(Technician::find($id)->update($request->all()))
        {
            Session::flash('update', 'Technician was successfully updated!');
            return redirect('technician');
        }
        
    }

    public function destroy($id)
    {
        Technician::findOrFail($id)->delete();
        Session::flash('delete', 'Technician was successfully deleted!');
        return redirect('technician');
    }
}
