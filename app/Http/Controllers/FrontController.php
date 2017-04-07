<?php

namespace evento\Http\Controllers;

use Illuminate\Http\Request;

use evento\Http\Requests;
use evento\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function policiaCiudadana()
    {

    }
}
