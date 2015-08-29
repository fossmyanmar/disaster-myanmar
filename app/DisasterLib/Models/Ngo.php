<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Ngo extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword;

    	//Set table
	protected $table = 'ngos';

	//Set fillable table column
	protected $fillable = array(
		'name', 
		'mm_name', 
		'registration_number', 
		'founder', 
		'mm_founder', 
		'volunteers_count', 
		'phone', 
		'email', 
		'website', 
		'facebook', 
		'state_id', 
		'city_id', 
		'address', 
		'bank_account', 
		'founded_date', 
		'slogan', 
		'type',
		'password',
		'is_approve',
		'role',
		'remark'
	);

	/**
	* The attributes excluded from the model's JSON form.
	*
	* @var array
	*/
	protected $hidden = ['password', 'remember_token'];

	//Ngo has many contact persons
	public function contactPerson()
	{
		return $this->hasMany('Disaster\DisasterLib\Models\NgoContact');
	}	

	//Relationship to State
	public function state()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\State', 'state_id');
	}

	//Relationship to City
	public function city()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\City', 'city_id');
	}
}
