<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('description_translations', function (Blueprint $table) {
            $table->id('id');
            $table->text('description');
            $table->unsignedBigInteger('description_id');
            $table->string('locale')->index();

            $table->unique(['description_id', 'locale']);
            $table->foreign('description_id')->references('id')->on('descriptions');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('description_translations');
    }
};
