<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ],
            [
                'role_id' => 2,
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
            ]
        ]);
    }
}