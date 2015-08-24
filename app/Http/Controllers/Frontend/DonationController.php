<?php

namespace Disaster\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Disaster\Http\Requests;
use Disaster\Http\Controllers\Controller;

class DonationController extends Controller
{
    /**
     * Show Originization Submit
     *
     * @return view
     * @author Set Kyar Wa Lar <setkyar16@gmail.com>
     **/
    public function addDonation()
    {
        $title = 'Add Donation';
        return view('frontend.add-donation', compact('title'));
    }
}
