<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tag_translations', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->string('title');
            $table->string('locale')->index();

            $table->unique(['tag_id', 'locale']);
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tag_translations');
    }
};
