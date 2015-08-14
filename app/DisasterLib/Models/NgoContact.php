<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Database\Eloquent\Model;

class NgoContact extends Model
{
    //Set table
	protected $table = 'contact_persons';

	//Set fillable table column
	protected $fillable = array(
		'name', 
		'mm_name', 
		'phone', 
		'email',
		'facebook',
		'website',
		'address', 
		'nrc',
		'ngo_id', 
		'state_id', 
		'city_id', 
		'village_id',
		'type',
	);

	//Relationship to Ngo
	public function ngo()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\Ngo');
	}

	//Relationship to City
	public function city()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\NgoContact');
	}
}