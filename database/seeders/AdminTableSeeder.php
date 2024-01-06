<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'      =>  fake()->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
