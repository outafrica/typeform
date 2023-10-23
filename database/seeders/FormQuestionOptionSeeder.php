<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FormQuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get question id for assocating radio options
        $radioQuestionId = DB::table('form_questions')
            ->where('question', 'Are you registered to any agricultural association or cooperative in your area?')
            ->where('is_approved', 1)
            ->value('id');

        // sample form_question_options to be used on the platform
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $radioQuestionId,
            'option' => 'Yes',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $radioQuestionId,
            'option' => 'No',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);

        // get question id for assocating check box
        $checkBoxQuestionId = DB::table('form_questions')
            ->where('question', 'How do you irrigate your crops?')
            ->where('is_approved', 1)
            ->value('id');

        // sample form_question_options to be used on the platform
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $checkBoxQuestionId,
            'option' => 'Drip irrigation',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $checkBoxQuestionId,
            'option' => 'Sprinkler irrigation',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $checkBoxQuestionId,
            'option' => 'Furrow irrigation',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_options')->insert([
            'id' => Str::uuid(),
            'form_question_id' => $checkBoxQuestionId,
            'option' => 'Rainfed farming',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
