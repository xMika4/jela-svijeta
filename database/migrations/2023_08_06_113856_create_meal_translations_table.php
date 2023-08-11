<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('meal_translations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('meal_id')->nullable();
            $table->string('title');
            $table->string('locale')->index();

            $table->unique(['meal_id', 'locale']);
            $table->foreign('meal_id')->references('id')->on('meals');
        });
    }
    
    public function down(): void
    {
    }
};
