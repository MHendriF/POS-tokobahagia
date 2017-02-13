<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;


class RegisterController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function postRegister(Request $request)
	{
		$this->validate($request, [
			'username'            	=> 'required',
			'first_name'            => 'required',
			'last_name'             => 'required',
			'phone'                 => 'required',
			'address'               => 'required',
			//'email'               	=> 'required',
			'password'              => 'confirmed|required|min:5|max:10',
			'password_confirmation' => 'required|min:5|max:10'
    		]);

		$user = Sentinel::registerAndActivate($request->all());

		$role = Sentinel::findRoleBySlug('employee');
		
		$role->users()->attach($user);

		return redirect('/auth');
	}
}
