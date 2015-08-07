<?php 

namespace Disaster\DisasterLib\Repositories;

use Disaster\DisasterLib\Models\NgoContact;
use Disaster\DisasterLib\Interfaces\NgoContactsInterface;
use Disaster\DisasterLib\Repositories\AbstractRepository;
/**
 * Database Process for States
 * @author Naing Win 
 */
class NgoContactsRepository extends AbstractRepository implements NgoContactsInterface {

	protected $model;
	public function __construct(NgoContact $model)
	{
		$this->model = $model;
	}
}