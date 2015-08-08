<?php 

namespace Disaster\DisasterLib\Interfaces;

use Disaster\DisasterLib\Interfaces\AbstractInterface;

/**
 * Interface for Two Model
 * @author Naing Win 
 */
interface CitiesInterface extends AbstractInterface {
	public function getList();
	public function getCitiesByState($state_id);
	public function getDistrictCity();
}