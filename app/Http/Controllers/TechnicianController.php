<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technician;
use Session;

class TechnicianController extends Controller
{
    public function index()
    {
        $data = Technician::all();
        return view('admins.technician.technician', compact('data'));
    }

    public function create()
    {
        return view('admins.technician.add_technician');
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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Technician::find($id);
        return view('admins.technician.edit_technician', compact('data'));
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
        Technician::find($id)->delete();
        Session::flash('delete', 'Technician was successfully deleted!');
        return redirect('technician');
    }
}
