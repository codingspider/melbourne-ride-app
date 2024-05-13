<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(allServices() as $key => $value){

            Service::create([
                'name' => $value,
                'description' => '',
                'status' => 1
            ]);
        }
    }
}