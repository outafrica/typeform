<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create([
            'role_id' => rand(1, 5),
        ])->each(function ($user) {
            // create user profile related to the created user
            UserProfile::factory(1)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
