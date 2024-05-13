<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Mr',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '56646',
            'password' => bcrypt('admin'),
            'is_admin' => 1
        ]);
        
        User::create([
            'first_name' => 'Guest',
            'last_name' => 'User',
            'email' => 'guestuser@gmail.com',
            'phone' => '56646',
            'password' => bcrypt('123456'),
            'is_admin' => 2
        ]);
    }
}
