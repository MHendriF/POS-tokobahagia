<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Input;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function postRegister(Request $request)
	{
		try
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

			// user found
			if (User::where('username', '=', Input::get('username'))->exists()) {
		   		return redirect()->back()->with('error', 'Username sudah terdaftar, silahkan menggunakan username yang lain.');
			}

	    	else
	    	{
	    		$user = Sentinel::registerAndActivate($request->all());
	    		
	    		$role = Sentinel::findRoleBySlug('employee');
			
				$role->users()->attach($user);

				return redirect('/auth');
	    	}

		}
		
    	catch(\Exception $e){
            return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }


	}
}
