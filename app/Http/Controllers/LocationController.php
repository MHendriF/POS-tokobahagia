<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function index()
    {
        $data = Location::all();
        return view('admins.location.location', compact('data'));
    }

    public function create()
    {
        return view('admins.location.add_location');
    }

    public function store(Request $request)
    {
        Location::create($request->all());
        return redirect('location');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Location::find($id);
        return view('admins.location.edit_location', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Location::find($id)->update($request->all());
        return redirect('location');
    }

    public function destroy($id)
    {
        Location::find($id)->delete();
        return redirect('location');
    }
}
