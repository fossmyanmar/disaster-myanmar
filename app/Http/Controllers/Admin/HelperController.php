<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\DisasterLib\Interfaces\CitiesInterface;
use Disaster\DisasterLib\Interfaces\VillagesInterface;
use Disaster\DisasterLib\Interfaces\StatesInterface;

class HelperController extends Controller
{
    protected $cities;
    protected $villages;
    protected $states;

    public function __construct(
        VillagesInterface $villages,
        CitiesInterface $cities, 
        StatesInterface $states)
    {
        $this->villages = $villages;
        $this->cities = $cities;
        $this->states = $states;
    }
    
    public function getCitiesByState()
    {
        $state_id = \Request::get('state_id');
        return \Response::json($this->cities->getCitiesByState($state_id));
    }

    public function getVillagesByCity()
    {
        $city_id = \Request::get('city_id');
        return \Response::json($this->villages->getVillagesByCity($city_id));
    }

    public function getDistrictCitiesByState()
    {
        $state_id = \Request::get('state_id');
        return \Response::json($this->cities->getDistrictCityByState($state_id));
    }
}
