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
		try {
			//Add New NGO
			$ngo = $this->ngos->create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'password' => \Hash::make($request->input('password')),
				'remark' => $request->input('remark'),
				'role' => 'ngo'
				]);

			//Sending email to admin
			\Mail::send('emails.reminder', ['ngo' => $ngo], function ($m) use ($ngo) {
				$m->to('kokoye2007@gmail.com')
					->cc('lovenefil@gmail.com')
					->subject('New NGO just registered!');
			});

			//Redirect 
			return \Redirect::back()->with('success', 'Successfully Registered. Please wait to manually contact you.');
		} catch (\Exception $e) {
			return \Redirect::back()->with('error',  $e->getMessage()); 
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

    	/**
    	 * NGO post login
    	 * @param  NgoLoginRequest $request 
    	 * @return response
    	 * @author Naing Win <konaingwin01@gmail.com>
    	 */
    	public function postLogin(NgoLoginRequest $request)
    	{
    		if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me))
    		{
    			if(\Auth::user()->is_approve == true && \Auth::user()->role == 'ngo')
    			{
    				echo "Hello There";
    			}
    			else {
    				\Auth::logout();
    				return \Redirect::back()->with('error', 'Please wait to login. We will manually contact you soon.');
    			}
    		}
    		else 
    		{
    			return \Redirect::back()->with('error', 'Username of Password wrong');
    		}
    	}
    }
