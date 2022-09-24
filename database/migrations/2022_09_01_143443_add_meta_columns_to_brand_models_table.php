<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('brand_models', function (Blueprint $table): void {
            $table->json('slug')
                ->after('name');
            $table->json('short_description')
                ->after('slug')
                ->nullable();
            $table->json('description')
                ->after('short_description')
                ->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('brand_models', function (Blueprint $table): void {
            $table->dropColumn('slug', 'short_description', 'description');
        });
    }
};
