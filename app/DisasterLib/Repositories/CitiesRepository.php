<?php 

namespace Disaster\DisasterLib\Repositories;

use Disaster\DisasterLib\Models\City;
use Disaster\DisasterLib\Interfaces\CitiesInterface;
use Disaster\DisasterLib\Repositories\AbstractRepository;
/**
 * Database Process for States
 * @author Naing Win 
 */
class CitiesRepository extends AbstractRepository implements CitiesInterface {

	protected $model;
	public function __construct(City $model)
	{
		$this->model = $model;
	}

	public function getList()
	{
		return $this->model->lists('name', 'id')->toArray();
	}

	public function getCitiesByState($state_id)
	{
		return $this->model->where('state_id', '=', $state_id)->lists('name', 'id')->toArray();
	}
}