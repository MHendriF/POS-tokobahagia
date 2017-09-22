<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use Session;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('admins.expense.index', compact('expenses'));
    }

    public function create()
    {
        return view('admins.expense.create');
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
        //dd($request->all());
    }


    public function edit($id)
    {
        $expenses = Expense::find($id);
        return view('admins.expense.edit', compact('expenses'));
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
