<?php 

//Set route name for resource route
if(!function_exists('set_route_name'))
{
	function set_route_name($resource)
	{
		$names = array();
		$types = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'];

		foreach ($types as $type) {
			$names[$type] = $resource . '.' . $type;
		}
		return $names;
	}
}