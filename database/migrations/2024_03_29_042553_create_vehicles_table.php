<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passanger');
            $table->string('luggage')->nullable();
            $table->string('hand_bag')->nullable();
            $table->string('wifi')->nullable();
            $table->string('movie')->nullable();
            $table->text('photos')->nullable();
            $table->string('status')->default(1)->comment("1=>ENABLE; 0=>DISABLE;");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
