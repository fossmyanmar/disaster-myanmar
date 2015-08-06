<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Requests\Admin\NgosRequest;
use Disaster\Http\Controllers\Controller;
use Disaster\DisasterLib\Interfaces\NgosInterface;

class NgoController extends Controller
{
    protected $ngos;

    public function __construct(
        NgosInterface $ngos)
    {
        $this->ngos = $ngos;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(NgosRequest $request)
    {
        $created = $this->ngos->create(array(
            'name'          => $request->input('name'),
            'mm_name'   => $request->input('mm_name'),
            'type'  => $request->input('type'),
            'mm_type ' => $request->input('mm_type'),
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
        $deleted = $this->ngos->delete($id);
        if($deleted)
        {
            return \Redirect::back()->with('success', 'Successfully Deleted');
        }
        return \Redirect::back()->with('error', 'Something went wrong. We will fix soon.');
    }
}
