<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new ApplicationSetting();
        $setting->business_name = 'Your Business Name';
        $setting->business_address = 'your business address';
        $setting->business_number = '00000000000';
        $setting->save();
    }
}
