<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('malfunctions', function (Blueprint $table): void {
            $table->id();
            $table->json('name');
            $table->json('slug');
            $table->json('short_description')
                ->nullable();
            $table->json('description')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('malfunctions');
    }
};
