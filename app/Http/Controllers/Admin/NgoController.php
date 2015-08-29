<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Requests\Admin\NgosRequest;
use Disaster\Http\Controllers\Controller;
use Disaster\DisasterLib\Interfaces\NgosInterface;
use Disaster\DisasterLib\Interfaces\StatesInterface;

class NgoController extends Controller
{
	protected $ngos;
	protected $states;

	public function __construct(
		NgosInterface $ngos,
		StatesInterface $states)
	{
		$this->ngos = $ngos;
		$this->states = $states;
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$ngos = $this->ngos->getPaginated();

    	return view('admin.ngos.index', compact('ngos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    	$states = $this->states->getList();
    	return view('admin.ngos.add', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(NgosRequest $request)
    {
    	// $founded_date = new \DateTime($request->founded_date);
    	$created = $this->ngos->create(array(
    		'name'          => $request->input('name'),
    		'mm_name'   => $request->input('mm_name'),
    		'founder' => $request->input('founder'), 
    		'mm_founder' => $request->input('mm_founder'),
    		'registration_number' => $request->input('registration_number'),
    		'volunteers_count' => $request->input('volunteers_count'), 
    		'phone' => $request->input('phone'), 
    		'email' => $request->input('email'), 
    		'website' => $request->input('website'), 
    		'facebook' => $request->input('facebook'), 
    		'state_id' => $request->input('state_id'), 
    		'city_id' => $request->input('city_id'), 
    		'address' => $request->input('address'), 
    		'bank_account' => $request->input('bank_account'), 
    		'founded_date' => $request->founded_date,
    		'slogan' => $request->input('slogan'),
    		'type' => $request->input('type'), 
    		'role' => 'ngo',
    		'password' => \Hash::make($request->input('email')),
    		'remakr' => $request->input('remark'),
    		'is_approve' => true
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
    	$ngo = $this->ngos->getById($id);
    	return view('admin.ngos.show', compact('ngo'));
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
    	$deleted = $this->ngos->delete($id);
    	if($deleted)
    	{
    		return \Redirect::back()->with('success', 'Successfully Deleted');
    	}
    	return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.');
    }
}
