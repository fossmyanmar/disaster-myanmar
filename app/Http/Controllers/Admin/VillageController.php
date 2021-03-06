<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Requests\Admin\VillagesRequest;
use Disaster\Http\Controllers\Controller;
use Disaster\DisasterLib\Interfaces\CitiesInterface;
use Disaster\DisasterLib\Interfaces\VillagesInterface;
use Disaster\DisasterLib\Interfaces\StatesInterface;

class VillageController extends Controller
{
	protected $cities;
	protected $villages;
	protected $states;

	public function __construct(
		VillagesInterface $villages,
		CitiesInterface $cities, 
		StatesInterface $states)
	{
		$this->villages = $villages;
		$this->cities = $cities;
		$this->states = $states;
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$states = $this->states->getList();
    	$villages = $this->villages->getPaginated();
    	return view('admin.villages.index', compact('states', 'villages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    	$states = $this->states->getList();
    	return view('admin.villages.add', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(VillagesRequest $request)
    {
    	$village_tract = false;
    	$village_tract_id = null;
    	
    	if($request->input('village_tract') == "on")
    		$village_tract = true;
    	
    	if($request->input('village_tract_id') != 0)
    		$village_tract_id = $request->input('village_tract_id');

    	$created = $this->villages->create(array(
    		'name'          => $request->input('name'),
    		'mm_name'   => $request->input('mm_name'),
    		'number_of_houses' => $request->input('number_of_houses'),
    		'city_id' => $request->input('city_id'),
    		'village_tract_id' => $village_tract_id,
    		'lat'               => $request->input('lat'),
    		'lng'               => $request->input('lng'),
    		'position_code' => $request->input('position'),
    		'population' => $request->input('population'),
    		'village_tract' => $village_tract
    		));
    	if($created)
    	{
    		return \Redirect::back()->with('success', 'Successfully Created');
    	}
    	else
    	{
    		return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.'); 
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    	$deleted = $this->villages->delete($id);
    	if($deleted)
    	{
    		return \Redirect::back()->with('success', 'Successfully Deleted');
    	}
    	return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.');	
    }
}
