<?php

namespace Disaster\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;
use Disaster\DisasterLib\Interfaces\StatesInterface;
use Disaster\DisasterLib\Interfaces\NgosInterface;

class NgoContactController extends Controller
{
    protected $states;
    protected $ngos;

    public function __construct(
        StatesInterface $states,
        NgosInterface $ngos)
    {
        $this->states = $states;
        $this->ngos = $ngos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add($id)
    {
        $states = $this->states->getList();
        $ngo = $this->ngos->getById($id);
        return view('admin.ngos.contacts.add', compact('states', 'ngo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
