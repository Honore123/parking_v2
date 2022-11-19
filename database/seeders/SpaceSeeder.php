<?php

namespace Database\Seeders;

use App\Models\ParkingSpace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i = 1; $i <= 3; $i++) {
            ParkingSpace::firstOrCreate([
                'space_number' => $i
            ]);
        }
    }
}
