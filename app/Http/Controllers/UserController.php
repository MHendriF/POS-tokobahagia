<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

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
        try{
            $this->validate($request, array(
                'username'   => 'required',
                'last_name'  => 'required',
                'first_name' => 'required',
                'phone'      => 'required',
                'address'    => 'required'
            ));

            if(User::find($id)->update($request->all())){
                Session::flash('update', 'User data was successfully updated!');
                return redirect('user');
            }
        } 
        catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        } 
    }

    public function destroy($id)
    {
        if(User::find($id)->delete())
        {
            Session::flash('delete', 'User was successfully deleted!');
            return redirect('user');
        }
        
    }
}
