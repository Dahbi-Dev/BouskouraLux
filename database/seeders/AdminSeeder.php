<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Houssam',
            'last_name' => 'Dahbi',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
            'is_admin' => true
        ]);
        // User::create([
        //     'first_name' => 'Bilal',
        //     'last_name' => 'Oukda',
        //     'email' => 'admin2@admin.com',
        //     'password' => bcrypt('123'),
        //     'is_admin' => true
        // ]);
    }
}
