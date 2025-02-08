<?php

namespace Database\Seeders;

use App\Models\teachers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        teachers::truncate();
        $teachers = [
            [
                'name' => 'Ajay Kumar',
                'email' => 'ajay@example.com',
                'phone' => '9876543210',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Neha Sharma',
                'email' => 'neha@example.com',
                'phone' => '8765432109',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Ravi Patel',
                'email' => 'ravi@example.com',
                'phone' => '7654321098',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Priya Singh',
                'email' => 'priya@example.com',
                'phone' => '6543210987',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Vikram Das',
                'email' => 'vikram@example.com',
                'phone' => '5432109876',
                'password' => Hash::make('password123'),
            ],
        ];

        teachers::insert($teachers);
    }
}
