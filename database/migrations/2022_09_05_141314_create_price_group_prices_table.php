<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('price_group_prices', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('price_group_id');
            $table->json('name');
            $table->decimal('price');
            $table->boolean('is_optional')
                ->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('price_group_prices');
    }
};
