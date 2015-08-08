<?php 

namespace Disaster\DisasterLib\Interfaces;

use Disaster\DisasterLib\Interfaces\AbstractInterface;

/**
 * Interface for State Model
 * @author Naing Win 
 */
interface VillagesInterface extends AbstractInterface {
	public function getVillagesByCity($city_id);
}