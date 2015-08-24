<?php

namespace Disaster\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;

class NgoController extends Controller
{
	/**
	 * NGO Register
	 * @return View
	 * @author Naing Win <konaingwin01@gmail.com>
	 */
	public function register()
	{
		$title = 'Register Ngo';
		return view('frontend.ngo.register', compact('title'));
	}

    	/**
	 * NGO Login
	 * @return View
	 * @author Naing Win <konaingwin01@gmail.com>
	 */
    	public function login()
    	{
    		$title = 'Login';
    		return view('frontend.ngo.login', compact('title'));
    	}
}
