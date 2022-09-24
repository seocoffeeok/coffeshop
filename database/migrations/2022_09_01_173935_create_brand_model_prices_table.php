<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('brand_model_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_model_id')
                ->nullable();
            $table->json('name');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brand_model_prices');
    }
};
