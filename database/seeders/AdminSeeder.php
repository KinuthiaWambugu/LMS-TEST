<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin creation
        User::create([
            'name'=>'Admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}
