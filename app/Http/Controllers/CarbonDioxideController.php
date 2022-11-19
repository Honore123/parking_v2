<?php

namespace App\Http\Controllers;

use App\Models\CarbonDioxide;
use Illuminate\Http\Request;

class CarbonDioxideController extends Controller
{
    public function carbonData()
    {
        $response = CarbonDioxide::query()->orderBy('id', 'DESC')->take(10)->get();
    
        return response()->json($response->reverse()->values());
    }
    public function store($data){
        CarbonDioxide::create([
            'carbon_data' => $data
        ]);
    }
}
