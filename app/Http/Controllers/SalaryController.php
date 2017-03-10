<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Salary;
use Session;
use Input;

class SalaryController extends Controller
{
    public function index()
    {
        $data = Salary::all();
        return view('admins.salary.salary', compact('data'));
    }

    public function create()
    {
    	$data = User::all();
        return view('admins.salary.add_salary', compact('data'));
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'user_id'     => 'required',
                'salary'     => 'required'
            ));

            if(Salary::where('user_id', '=', Input::get('user_id'))->exists())
            {
            	return redirect()->back()->with('error', ' This user already exists. Please select another user.');
            }
            else{
            	Salary::create($request->all());
            	Session::flash('new', 'New salary was successfully added!');
                return redirect('salary');
            }

        }
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went wrong. Please try again.');
        }

    }


    public function edit($id)
    {
        $data = Salary::find($id);
        return view('admins.salary.edit_salary', compact('data'));
    }

    public function update(Request $request, $id)
    {
        if(Salary::findOrFail($id)->update($request->all()))
        {
            Session::flash('update', 'Salary was successfully updated!');
            return redirect('salary');
        }
        
    }

    public function destroy($id)
    {
        Salary::findOrFail($id)->delete();
        Session::flash('delete', 'Salary was successfully deleted!');
        return redirect('salary');
    }
}
