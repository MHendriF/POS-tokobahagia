<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
     public function index()
    {
        $data = Supplier::all();
        return view('admins.supplier.supplier', compact('data'));
    }

 
    public function create()
    {
        $data = Category::all();
        $data2 = Location::all();
        return view('admins.supplier.add_supplier', compact('data','data2'));
    }

    public function store(Request $request)
    {
        Supplier::create($request->all());
        return redirect('supplier');
        //dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Supplier::find($id);
        return view('admins.supplier.edit_supplier', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Supplier::find($id)->update($request->all());
        return redirect('supplier');
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return redirect('supplier');
    }
}
