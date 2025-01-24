<?php

namespace App\Http\Controllers;

use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Location::all();
    }
}
