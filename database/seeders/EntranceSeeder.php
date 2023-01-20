<?php

namespace Database\Seeders;

use App\Models\Entrance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entrance::firstOrCreate([
            'door_number' => 1,
            'status' => 0
        ]);
    }
}
