<?php 

namespace Disaster\DisasterLib\Repositories;

use Disaster\DisasterLib\Models\Ngo;
use Disaster\DisasterLib\Interfaces\NgosInterface;
use Disaster\DisasterLib\Repositories\AbstractRepository;
/**
 * Database Process for States
 * @author Naing Win 
 */
class NgosRepository extends AbstractRepository implements NgosInterface {

	protected $model;
	public function __construct(Ngo $model)
	{
		$this->model = $model;
	}
}