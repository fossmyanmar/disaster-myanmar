<?php 

namespace Disaster\DisasterLib\Interfaces;

use Disaster\DisasterLib\Interfaces\AbstractInterface;

/**
 * Interface for State Model
 * @author Naing Win 
 */
interface StatesInterface extends AbstractInterface {
	public function getList();
}