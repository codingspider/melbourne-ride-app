<?php

namespace Database\Seeders;

use App\Models\Fare;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fare::create([
            'service_id' => 1,
            'base_fare' => 30,
            'per_km_rate' => 0,
            'extra_charge' => 0,
            'is_vat_applicable' => 0,
            'per_minute_rate' => 0,
            'vat' => 0,
        ]);
    }
}