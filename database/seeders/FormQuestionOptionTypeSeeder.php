<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class FormQuestionOptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default user form_question_option_types to be used on the platform
        DB::table('form_question_option_types')->insert([
            'name' => 'Radio Button',
            'description' => 'Questions that use radio button as the answer option.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_option_types')->insert([
            'name' => 'Checkbox',
            'description' => 'Questions that use checkbox as the answer option.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_option_types')->insert([
            'name' => 'Integer',
            'description' => 'Questions that use text as the answer option.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_option_types')->insert([
            'name' => 'Date',
            'description' => 'Questions that use text as the answer option.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_option_types')->insert([
            'name' => 'Text',
            'description' => 'Questions that use text as the answer option.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
