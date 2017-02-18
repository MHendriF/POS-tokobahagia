<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Transaction;

class MainTransactionController extends Controller
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
        Technician::create($request->all());
        return redirect('technician');
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
        Technician::find($id)->update($request->all());
        return redirect('technician');
    }

    public function destroy($id)
    {
        Technician::find($id)->delete();
        return redirect('technician');
    }
}
