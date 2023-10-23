<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get userId to be used for questions data
        $userId = DB::table('users')->select('id')->first();

        // sample forms to be used on the platform
        DB::table('forms')->insert([
            'title' => 'Fertilizer Subsidy Application',
            'user_id' => $userId->id,
            'is_approved' => 1,
            'description' => 'Fertilizer subsidy application for farmers across the country',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('forms')->insert([
            'title' => 'Maize Seed Subsidy',
            'user_id' => $userId->id,
            'is_approved' => 0,
            'description' => 'Maize subsidy application for farmers across the country',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
