<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use Illuminate\Http\Request;

class EntranceController extends Controller
{
    public function doorOpen() {
        $door = Entrance::where('id',1)->first();

        echo $door->status;
    }

    public function doorClose() {
        $door = Entrance::where('id',1)->first();

        $door->update(['status' => 0]);

        echo $door->status;
    }
}
