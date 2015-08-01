<?php

namespace Disaster\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('frontend.index');
    }


    public function donationGroup()
    {

    }

    public function news()
    {
    	return view('frontend.news');
    }

    public function addInfo()
    {
    	return view('frontend.infoadd');
    }

    public function map()
    {
        return view('frontend.map');
    }
}
