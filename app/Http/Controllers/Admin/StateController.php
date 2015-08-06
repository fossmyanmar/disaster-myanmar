<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\Http\Requests\Admin\StatesRequest;
use Disaster\DisasterLib\Interfaces\StatesInterface;

class StateController extends Controller
{
	protected $states;

	public function __construct(
		StatesInterface $states)
	{
		$this->states = $states;
	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$states =  $this->states->getPaginated();
    	return view('admin.states.index', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StatesRequest $request)
    {
    	$created = $this->states->create(array(
    		'name' => $request->input('name'),
    		'mm_name' => $request->input('mm_name'),
    		'lat' => $request->input('lat'),
    		'lng' => $request->input('lng'),
    		'position_code' => $request->input('position'),
    		'population' => $request->input('population'),
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
    	$deleted = $this->states->delete($id);
    	if($deleted)
    	{
    		return \Redirect::back()->with('success', 'Successfully Deleted');
    	}
    	return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.');	
    }
}
