<?php

namespace Database\Seeders;

use App\Models\Login;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersIds = User::pluck('id');

        foreach ($usersIds as $id) {
            foreach (range(1, 10) as $i) {
                // optimalize this to be quicker
                Login::create([
                    'user_id' => $id,
                    'ip_address' => fake()->ipv4,
                    'created_at' => now()->subMinutes($i),
                ]);
            }
        }
    }
}
