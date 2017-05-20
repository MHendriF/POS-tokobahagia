<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;
use Input;
use App\User;

class LoginController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function auth()
    {
        return view('auth.authenticate');
    }

    public function postLogin(Request $request)
    {
        try{
            $this->validate($request, [
            'username'     => 'required',
            'password'  => 'required'
            ]);

            $user = User::where('username', '=', Input::get('username'))->first();
            if ($user === null) {
               return redirect()->back()->with('error', 'User belum terdaftar');
            }

            // if(!$exists){
            //     return redirect()->back()->with('error', 'User Belum Terdaftar');
            // }

            elseif(Sentinel::authenticate($request->all())){
                $slug = Sentinel::getUser()->roles()->first()->slug;
                if($slug == 'admin')
                    return redirect('general');
                elseif($slug == 'employee')
                    return redirect('/home');    
            }

            else {
                return redirect()->back()->with(['error' => 'Username or password is wrong']);
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "You are banned for $delay second."]);
        } catch (NotActivatedException $e) {
            return redirect()->back()->with(['error' => 'Your account is not activated!']);
        } 
    	
    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/auth');
    }
}
