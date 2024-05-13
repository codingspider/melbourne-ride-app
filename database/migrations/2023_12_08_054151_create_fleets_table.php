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
        Schema::create('fleets', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id')->nullable();
            $table->integer('tour_id')->nullable();
            $table->string('name');
            $table->string('passanger');
            $table->string('luggage')->nullable();
            $table->string('hand_bag')->nullable();
            $table->text('photos')->nullable();
            $table->decimal('price', 10,2)->nullable();
            $table->string('status')->default(1)->comment("1=>ENABLE; 0=>DISABLE; 2=>Booked");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleets');
    }
};
