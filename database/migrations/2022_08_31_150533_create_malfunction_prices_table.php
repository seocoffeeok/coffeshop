<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('malfunction_prices', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('malfunction_id')
                ->nullable();
            $table->json('name');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('malfunction_prices');
    }
};
