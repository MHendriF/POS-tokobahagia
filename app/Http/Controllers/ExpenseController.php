<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use Session;

class ExpenseController extends Controller
{
    public function index()
    {
        $data = Expense::all();
        return view('admins.expense.expense', compact('data'));
    }

    public function create()
    {
        return view('admins.expense.add_expense');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'listrik'   => 'required',
                'makan'   => 'required'
            ));
            
            if(Expense::create($request->all())){
                Session::flash('new', 'New Expense was successfully added!');
                return redirect('expense');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }


    public function edit($id)
    {
        $data = Expense::find($id);
        return view('admins.expense.edit_expense', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'listrik'   => 'required',
                'makan'   => 'required'
            ));
            
            if(Expense::find($id)->update($request->all())){
                Session::flash('update', 'Expense was successfully updated!');
                return redirect('expense');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Expense::find($id)->delete())
        {
            Session::flash('delete', 'Expense was successfully deleted!');
            return redirect('expense');
        }  
    }
}
