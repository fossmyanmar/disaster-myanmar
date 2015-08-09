<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\Http\Requests\Admin\CitiesRequest;
use Disaster\DisasterLib\Interfaces\CitiesInterface;
use Disaster\DisasterLib\Interfaces\StatesInterface;

class CityController extends Controller
{
	protected $cities;
	protected $states;

	public function __construct(
		StatesInterface $states,
		CitiesInterface $cities)
	{
		$this->states = $states;
		$this->cities = $cities;
	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$cities = $this->cities->getPaginated();
    	return view('admin.cities.index', compact('cities'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
     public function create()
     {
     	$states = $this->states->getList();
     	return view('admin.cities.add', compact('states'));
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CitiesRequest $request)
    {
    	$is_district = false;
    	if($request->input('is_district') == "on")
    	{
    		$is_district = true;
    	}
    	$created = $this->cities->create(array(
    		'name'          => $request->input('name'),
    		'mm_name'   => $request->input('mm_name'),
    		'state_id' => $request->input('state'),
    		'lat'               => $request->input('lat'),
    		'lng'               => $request->input('lng'),
    		'position_code' => $request->input('position'),
    		'population' => $request->input('population'),
    		'is_district' => $is_district,
    		'district_id' => $request->input('district_id'),
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
    	$deleted = $this->cities->delete($id);
    	if($deleted)
    	{
    		return \Redirect::back()->with('success', 'Successfully Deleted');
    	}
    	return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.');	
    }
}
