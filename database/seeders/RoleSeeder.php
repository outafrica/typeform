<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default roles to be used on the platform
        DB::table('roles')->insert([
            'name' => 'Farmer',
            'description' => 'Farmer role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Agent',
            'description' => 'Agent role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Admin role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'description' => 'Super Admin role type',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
