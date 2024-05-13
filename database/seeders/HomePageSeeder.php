<?php

namespace Database\Seeders;

use App\Models\Frontend;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = public_path('assets/db/frontends.sql');

        if (File::exists($sqlFile)) {
            try {
                $sql = File::get($sqlFile);
                DB::unprepared($sql);
                $this->command->info('SQL file imported successfully.');
            } catch (\Exception $e) {
                $this->command->error('Error importing SQL file: ' . $e->getMessage());
            }
        } else {
            $this->command->error('SQL file not found.');
        }
        
    }
}