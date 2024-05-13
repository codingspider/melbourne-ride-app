<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('title')->nullable();
            $table->double('price')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('text_color')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->json('features_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
