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
        Schema::create('get_qoutes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('pickaupa_location"')->nullable();
            $table->string('pick_a_date')->nullable();
            $table->string('pick_time')->nullable();
            $table->string('am_pm')->nullable();
            $table->string('service')->nullable();
            $table->integer('pessengerNo')->nullable();
            $table->string('vehicle')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_qoutes');
    }
};
