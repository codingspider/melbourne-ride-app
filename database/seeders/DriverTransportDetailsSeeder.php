<?php

namespace Database\Seeders;

use App\Models\DriverTransportDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverTransportDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DriverTransportDetails::factory(10)->create();
    }
}
