<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_translations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('title');
            $table->string('locale')->index();

            $table->unique(['category_id', 'locale']);
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down(): void
    {
    }
};
