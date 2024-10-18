<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('123456789'),
            'user_type' => "admin",
            'created_at' =>Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
        $user = User::create([
            'name' => "moderator",
            'email' => "moderator@gmail.com",
            'password' => bcrypt('123456789'),
            'user_type' => "moderator",
            'created_at' =>Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
        $user = User::create([
            'name' => "customer",
            'email' => "customer@gmail.com",
            'password' => bcrypt('123456789'),
            'user_type' => "customer",
            'created_at' =>Carbon::now()->toDateTimeString(),
            'updated_at' => null
        ]);
    }
}
