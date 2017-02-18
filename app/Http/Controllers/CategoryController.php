<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

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
        Category::create($request->all());
        return redirect('category');
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
        Category::find($id)->update($request->all());
        return redirect('category');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('category');
    }
}
