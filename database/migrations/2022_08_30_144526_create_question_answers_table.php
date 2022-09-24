<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('question_answers', function (Blueprint $table): void {
            $table->id();
            $table->json('question');
            $table->json('answer');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_answers');
    }
};
