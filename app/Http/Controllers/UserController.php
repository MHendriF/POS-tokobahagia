<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admins.user.user', compact('data'));
    }

    public function create()
    {
        return view('admins.user.add_user');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('user');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admins.user.edit_user', compact('data'));
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect('user');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('user');
    }
}
