<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    	//Set table
	protected $table = 'states';

	//Set fillable table column
	protected $fillable = array('name', 'mm_name', 'lat', 'lng', 'position_code', 'population');

	//State has Many Cities
	public function cities()
	{
		return $this->hasMany('Disaster\DisasterLib\Models\City');
	}

	//State has many villages
	 public function villages()
	    {
	        return $this->hasManyThrough('Disaster\DisasterLib\Models\City', 'Disaster\DisasterLib\Models\Village', 'state_id', 'city_id');
	    }

	//State has many ngos
	public function ngos()
	{
		return $this->hasMany('Disaster\DisasterLib\Models\Ngo', 'state_id');
	}
}
