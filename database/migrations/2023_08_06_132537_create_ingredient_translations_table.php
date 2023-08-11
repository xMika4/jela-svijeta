<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ingredient_translations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('ingredient_id')->nullable();
            $table->string('title');
            $table->string('locale')->index();

            $table->unique(['ingredient_id', 'locale']);
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingredient_translations');
    }
};
