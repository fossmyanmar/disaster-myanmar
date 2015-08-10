<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    //Set table
	protected $table = 'villages';

	//Set fillable table column
	protected $fillable = array(
		'name', 
		'mm_name', 
		'city_id', 
		'lat', 
		'lng', 
		'position_code', 
		'population', 
		'number_of_houses', 
		'village_tract', 
		'village_tract_id'
		);

	//Relationship to city
	public function city()
	{
		return $this->belongsTo('Disaster\DisasterLib\Models\City');
	}
}
