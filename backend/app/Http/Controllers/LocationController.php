<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Database\Eloquent\Casts\Json;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): JsonResponse
  {
    // Fetch all locations and return as a JSON response
    return response()->json(Location::all());
  }
}
