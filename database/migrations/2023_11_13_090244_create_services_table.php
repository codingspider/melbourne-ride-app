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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('status')->default(1)->comment('1=>Active; 0=>Inactive');
            $table->text('description')->nullable();
            $table->decimal('base_fare', 10,2)->nullable();
            $table->integer('subrub_id')->nullable();
            $table->decimal('fare_1', 10,2)->nullable();
            $table->decimal('fare_2', 10,2)->nullable();
            $table->decimal('fare_3', 10,2)->nullable();
            $table->decimal('fare_4', 10,2)->nullable();
            $table->decimal('fare_5', 10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
