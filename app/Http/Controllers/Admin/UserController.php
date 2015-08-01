<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\Http\Requests\Admin\AdminLogin;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getLogin()
    {
    	return view('admin.login');
    }

    /**
     * [postLogin]
     * @param  AdminLogin $login [Login Request]
     * @return [response]
     */
    public function postLogin(AdminLogin $login)
    {
    	if (\Auth::attempt(['email' => $login->email, 'password' => $login->password], $login->remember_me))
    	{
    		$url = \Session::get('attemptedUrl');
    		if(! isset($url))
    		{
    			$url = \URL::route('admin.index');
    		}
    		\Session::forget('attemptedUrl');
    		return \Redirect::to($url);
    	}
    	else
    	{
    		return \Redirect::back()->with('error', 'email or password wrong');
    	}
    }


    public function logout()
    {
    	\Auth::logout();
    	return redirect()->route('admin.get.login');
    }
}
