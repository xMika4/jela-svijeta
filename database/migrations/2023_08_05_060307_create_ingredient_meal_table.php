<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ingredient_meal', function (Blueprint $table) {
            $table->integer('ingredient_id');
            $table->integer('meal_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingredient_meal');
    }
};
