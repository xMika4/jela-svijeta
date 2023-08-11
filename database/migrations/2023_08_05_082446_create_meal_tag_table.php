<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meal_tag', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('meal_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meal_tag');
    }
};
