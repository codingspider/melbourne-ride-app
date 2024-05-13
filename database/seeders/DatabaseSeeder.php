<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SubrubSeeder::class);
        $this->call(FleetsTableSeeder::class);
    }
}