<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


class LocationController extends Controller
{
    public function index(Request $request)
    {
        // $position = Location::get('127.0.0.1:8000');

        // if ($position =  Location::get('127.0.0.1:8000')) {
        //     // Successfully retrieved position.
        //     echo $position->countryName;
        // } else {
        //     // Failed retrieving position.
        // }
            // $userIp = $request->ip();
            // $locationData = Location::get($userIp);

            // dd($locationData);
            // $userIp = $request->ip();
            // return $userIp;
            // $locationData = Location::get('127.0.0.1:8000');

            // dd($locationData);
    }
}
