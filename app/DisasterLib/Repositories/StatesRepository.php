<?php 

namespace Disaster\DisasterLib\Repositories;

use Disaster\DisasterLib\Models\State;
use Disaster\DisasterLib\Interfaces\StatesInterface;
use Disaster\DisasterLib\Repositories\AbstractRepository;
/**
 * Database Process for States
 * @author Naing Win 
 */
class StatesRepository extends AbstractRepository implements StatesInterface {

	protected $model;
	public function __construct(State $model)
	{
		$this->model = $model;
	}

	//Get List with ID and Name Only
	public function getList()
	{
		return $this->model->lists('name', 'id')->toArray();
	}
}