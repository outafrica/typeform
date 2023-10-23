<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_question_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('form_response_id');
            $table->foreignUuid('form_question_id');
            $table->string('answer_option')->nullable();
            $table->text('answer_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_question_answers');
    }
};
