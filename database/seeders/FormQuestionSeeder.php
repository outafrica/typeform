<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FormQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get userId to be used for form_questions data
        $userId = DB::table('users')->select('id')->first();

        // sample form_questions to be used on the platform
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 1,
            'form_question_option_type_id' => 5,
            'question' => 'Enter your full name',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 1,
            'form_question_option_type_id' => 4,
            'question' => 'Enter your date of birth?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 1,
            'form_question_option_type_id' => 1,
            'question' => 'Are you registered to any agricultural association or cooperative in your area?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 2,
            'form_question_option_type_id' => 3,
            'question' => 'What is the size of your farm in acres or acres?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 2,
            'form_question_option_type_id' => 5,
            'question' => 'In which geographic location is your farm situated?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 2,
            'form_question_option_type_id' => 3,
            'question' => 'How many years have you been actively farming?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 22,
            'form_question_option_type_id' => 5,
            'question' => 'How do you plan to expand or diversify your agricultural activities in the coming years?',
            'is_approved' => 0,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_questions')->insert([
            'id' => Str::uuid(),
            'form_id' => 1,
            'user_id' => $userId->id,
            'form_question_category_id' => 3,
            'form_question_option_type_id' => 2,
            'question' => 'How do you irrigate your crops?',
            'is_approved' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
