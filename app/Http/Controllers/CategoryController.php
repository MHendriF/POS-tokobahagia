<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admins.category.category', compact('data'));
    }

    public function create()
    {
        return view('admins.category.add_category');
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, array(
                'category_name'   => 'required'
            ));
            
            if(Category::create($request->all())){
                Session::flash('new', 'Category was successfully added!');
                return redirect('category');
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
        $data = Category::find($id);
        return view('admins.category.edit_category', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $this->validate($request, array(
                'category_name'   => 'required'
            ));
            
            if(Category::find($id)->update($request->all())){
                Session::flash('update', 'Category was successfully updated!');
                return redirect('category');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(Category::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Category method was successfully deleted!');
            return redirect('category');
        }
    }
}
