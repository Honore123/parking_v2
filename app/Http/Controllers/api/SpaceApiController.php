<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\ParkingSpace;

class SpaceApiController extends Controller
{
    public function index() {
        return ParkingSpace::all();
    }
}
