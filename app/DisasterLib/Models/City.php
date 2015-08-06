<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    	//Set table
	protected $table = 'cities';

	//Set fillable table column
	protected $fillable = array('name', 'mm_name', 'state_id', 'lat', 'lng', 'position_code', 'population');

	//Relationship to State
	public function state()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\State');
	}

	//City has many villages
	public function villages()
	{
		return $this->hasMany('Disaster\DisasterLib\Models\Village');
	}
}
