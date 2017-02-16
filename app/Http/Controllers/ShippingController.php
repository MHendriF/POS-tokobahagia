<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;

class ShippingController extends Controller
{
   
    public function index()
    {
        $data = Shipping::all();
        return view('admins.shipping.shipping', compact('data'));
    }

    public function create()
    {
        return view('admins.shipping.add_shipping');
    }

    public function store(Request $request)
    {
        Shipping::create($request->all());
        return redirect('shipping');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Shipping::find($id);
        return view('admins.shipping.edit_shipping', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Shipping::find($id)->update($request->all());
        return redirect('shipping');
    }

    public function destroy($id)
    {
        Shipping::find($id)->delete();
        return redirect('shipping');
    }
}
