<?php

namespace Disaster\DisasterLib\Models;

use Illuminate\Database\Eloquent\Model;

class Ngo extends Model
{
    	//Set table
	protected $table = 'ngos';

	//Set fillable table column
	protected $fillable = array('name', 'mm_name', 'type', 'mm_type');

	//Ngo has many contact persons
	public function contactPerson()
	{
		return $this->hasMany('Disaster\DisasterLib\Models\NgoContact');
	}
}
