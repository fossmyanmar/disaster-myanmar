<?php

namespace Disaster\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;

class SubmitController extends Controller
{
    /**
     * Show Originization Submit
     *
     * @return view
     * @author Set Kyar Wa Lar <setkyar16@gmail.com>
     **/
    public function SubmitOrginization()
    {
        return view('frontend.orginization');;
    }
}
