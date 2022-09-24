<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brand_prices', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('brand_id')
                ->nullable();
            $table->json('name');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brand_prices');
    }
};
