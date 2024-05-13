<?php

namespace Database\Seeders;

use App\Models\Subrub;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubrubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = getSubuRB();

        foreach($datas as $key => $val){
            Subrub::create([
                'name' => $val,
                'price' => 50
            ]);
        }
    }
}
