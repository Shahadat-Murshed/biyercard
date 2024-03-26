<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'username' =>  'superuser',
                'email' => 'super@gmail.com',
                'role' => 'admin',
                'status' => 1,
                'is_super' => 1,
                'email_verified_at' => now(),
                'password' => bcrypt('super'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mod Admin',
                'username' =>  'adminuser',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 1,
                'is_super' => 0,
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'General User',
                'username' =>  'generaluser',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'status' => 1,
                'is_super' => 0,
                'email_verified_at' => now(),
                'password' => bcrypt('user'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        \App\Models\User::factory(10)->create();
    }
}
