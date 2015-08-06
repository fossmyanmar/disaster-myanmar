<?php 

namespace Disaster\DisasterLib\Interfaces;

/**
 * Interface for Abstract Model
 * @author Khine Lin
 */
interface AbstractInterface {
	public function getAll($sort_field = 'id', $sort_type = 'asc');
	public function getPaginated($count);
	public function getById($id);
	public function create(array $input);
	public function update(array $input, $id);
	public function delete($id);
	public function getCount();
}