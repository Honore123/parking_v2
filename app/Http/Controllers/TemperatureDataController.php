<?php

namespace App\Http\Controllers;

use App\Models\TemperatureData;
use Illuminate\Http\Request;

class TemperatureDataController extends Controller
{
    public function temperatureData()
    {
        $response = TemperatureData::query()->orderBy('id', 'DESC')->take(10)->get();
        
        return response()->json($response->reverse()->values());
    }

    public function store($data){
        TemperatureData::create([
            'temperature_data' => $data,
            'recorded_at' => now()
        ]);

        echo $data;
    }
}
