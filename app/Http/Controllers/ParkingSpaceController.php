<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use Illuminate\Http\Request;

class ParkingSpaceController extends Controller
{
    public function index()
    {
        return view('parkingSpace.index', [
            'spaces' => ParkingSpace::all()
        ]);
    }

    public function booking(ParkingSpace $space) {

        return view('parkingSpace.booking', [
            'space' => $space
        ]);
    }

    public function update(ParkingSpace $space, $data){
       $space->update([
        'availability' => $data
       ]);
    }
}
