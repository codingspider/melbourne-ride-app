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
        Schema::create('driver_transport_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('transport_type_id');
            $table->foreign('transport_type_id')->references('id')->on('transport_types');
            
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');

            $table->string('name')->nullable();
            $table->string('register_no')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('chasis_no')->nullable();
            $table->string('model_no')->nullable();
            $table->integer('seat_capacity')->nullable();

            $table->string('car_planumber')->nullable();
            $table->string('operating_license')->nullable();
            $table->string('car_luggage')->nullable();
            $table->text('car_photos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_transport_details');
    }
};
