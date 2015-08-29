<?php

namespace Disaster\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\Http\Requests\Frontend\RegisterRequest;
use Disaster\Http\Requests\Frontend\NgoLoginRequest;
use Disaster\DisasterLib\Interfaces\NgosInterface;

class NgoController extends Controller
{
	protected $ngos;

	public function __construct(
		NgosInterface $ngos)
	{
		$this->ngos = $ngos;
	}
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
	 * NGO Register
	 * @param  RegisterRequest $request 
	 * @return Response
	 * @author Naing Win <konaingwin01@gmail.com>
	 */
	public function postRegister(RegisterRequest $request)
	{
		$created = $this->ngos->create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'password' => \Hash::make($request->input('password')),
			'remark' => $request->input('remark'),
			'role' => 'ngo'
			]);
		if($created)
		{
			return \Redirect::back()->with('success', 'Successfully Registered');
		}
		else
		{
			return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.'); 
		}
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

    	public function postLogin(NgoLoginRequest $request)
    	{
    		if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me))
    		{
    			if(\Auth::user()->is_approve == true && \Auth::user()->role == 'ngo')
    			{
    				echo "Hello There";
    			}
    			\Auth::logout();
    			return \Redirect::back()->with('error', 'Please wait to login. We will manually contact you soon.');
    			// $url = \Session::get('attemptedUrl');
    			// if(! isset($url))
    			// {
    			// 	$url = \URL::route('admin.index');
    			// }
    			// \Session::forget('attemptedUrl');
    			// return \Redirect::to($url);
    			
    		}
    		else
    		{
    			return \Redirect::back()->with('error', 'email or password wrong');
    		}
    	}
    }
