<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\Http\Requests\Admin\UpdateMe;

class MainController extends Controller
{
	/**
	 * Admin index
	 * @return [View] 
	 */
	public function index()
	{
		return view('admin.index');
	}

	/**
	 * Control Panel Setting
	 * @return [View] 
	 */
	public function setting()
	{	
		$user = \Auth::user();
		return view('admin.setting', compact('user'));
	}

	/**
	 * [updateSetting description]
	 * @param  UpdateSetting $update_setting [description]
	 * @return [type]                        [description]
	 */
	public function updateMe(UpdateMe $update_me)
	{
		$user = \Auth::user();
		if (\Hash::check($update_me->current_password, \Auth::user()->password)) {
   			$user->password = \Hash::make($update_me->new_password);
   			$user->save();
   			return \Redirect::back()->with('success', 'Setting successfully saved.');
		}
		else
		{
			return \Redirect::back()->withInput()->with('error', 'Current password was not match.');
		}
	}
}
