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
        Schema::create('fares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->decimal('base_fare', 10, 2);
            $table->decimal('per_km_rate', 10, 2)->nullable();
            $table->decimal('per_minute_rate', 10, 2);
            $table->decimal('extra_charge', 10, 2);
            $table->integer('is_vat_applicable')->nullable();
            $table->integer('vat')->nullable();
            // Foreign key relationship
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fares');
    }
};
