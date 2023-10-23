<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class FormQuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // default form_question_categories to be used on the platform
        DB::table('form_question_categories')->insert([
            'name' => 'Personal Information',
            'description' => 'Questions regarding age, education, and years of farming experience.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Farm Profile',
            'description' => 'Questions about farm size and location',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Crop Management',
            'description' => 'Questions related to how crops are planted, irrigated, fertilized, and managed.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Livestock Management',
            'description' => 'Questions about the care, feeding, and housing of livestock.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Pest and Disease Control',
            'description' => 'Questions about pest and disease prevention and management practices',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Soil and Land Management',
            'description' => 'Questions regarding soil testing, conservation, and land management techniques.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Cereals and Grains',
            'description' => 'Questions about the cultivation and yield of grains such as wheat, rice, and corn.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Fruits and Vegetables',
            'description' => 'Questions related to the types of fruits and vegetables grown and planting seasons.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Oilseeds',
            'description' => 'Questions about the cultivation and production process of oilseeds like soybeans and canola.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Cattle Farming',
            'description' => 'Questions about the number of cattle, dairy or beef farming practices, and management.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Poultry Farming',
            'description' => 'Questions about broiler chicken production, chicken breeds, and care',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Swine Farming',
            'description' => 'Questions related to pig health management and market weights',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Water Management',
            'description' => 'Questions about water conservation and source management',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Waste Management',
            'description' => 'Questions regarding manure handling, recycling, and composting practices.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Financial Management',
            'description' => 'Questions about budgeting, expenditures, and revenue sources.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Market Trends',
            'description' => 'Questions related to market research, pricing strategies, and trends.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Use of Technology',
            'description' => 'Questions about technology adoption, farm management software, and precision agriculture tools.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Research and Development',
            'description' => ' Inquiries about the integration of new technologies and investment in research and development.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Legal and Regulatory Requirements',
            'description' => 'Questions about compliance with agricultural laws and environmental regulations.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Information Sources',
            'description' => 'Questions about how farmers stay updated on practices, including extension services and training.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Challenges Faced',
            'description' => 'Questions focusing on the primary challenges in farming practices',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
        DB::table('form_question_categories')->insert([
            'name' => 'Future Goals',
            'description' => 'Questions about farmers aspirations and plans for future improvements.',
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
