<?php 

namespace Disaster\DisasterLib\Repositories;

use Disaster\DisasterLib\Models\Village;
use Disaster\DisasterLib\Interfaces\VillagesInterface;
use Disaster\DisasterLib\Repositories\AbstractRepository;
/**
 * Database Process for States
 * @author Naing Win 
 */
class VillagesRepository extends AbstractRepository implements VillagesInterface {

	protected $model;
	public function __construct(Village $model)
	{
		$this->model = $model;
	}
}