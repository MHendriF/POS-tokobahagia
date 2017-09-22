<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admins.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admins.category.create');
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

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admins.category.edit', compact('categories'));
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
