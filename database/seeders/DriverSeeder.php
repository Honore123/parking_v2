<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::firstOrCreate([
            "firstname" => "IMANISHIMWE",
            "lastname" => "Honore",
            "phone_number" => 780850976,
            "account_balance" => 30000,
            "password" => Hash::make("password")
        ]);
    }
}
