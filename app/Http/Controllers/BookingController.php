<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Entrance;
use App\Models\ParkingSpace;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $clientId = request('client');

        return Booking::where('driver_id', $clientId)->get();
    }

    public function store()
    {
        $space = request('selectedSpace');
        $driverId = request('id');

        $booking = Booking::create([
            'driver_id' => $driverId,
            'parking_space_id' => $space
        ]);
        $parkSpace = ParkingSpace::where('id', $space)->first();
        $parkSpace->update(['availability' => 2]);
        
        return response($booking, 200);

    }

    public function show()
    {
        $client = request('client');
        $booking = Booking::where('driver_id', $client)->first();
        if($booking->id != null) {
            $door = Entrance::where('id', 1)->first();
            $door->update(['status'=>1]);
            $booking->delete();
            return response([
                "message" => "Door is Opening",
            ], 200);
        }
        return response([
            "message" => "Error Occured",
        ], 401);
    }
}
