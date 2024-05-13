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
        Schema::create('booking_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2);
            $table->decimal('gst', 10, 2);
            $table->decimal('paid_amount', 10, 2);
            $table->string('payment_method')->nullable();
            $table->foreign('booking_id')->references('id')->on('taxi_bookings')->onDelete('cascade');
            $table->unsignedInteger('status')->nullable()->comment('0=>Initiated; 1=>Success; 2=>Pending; 3=>Rejected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_payments');
    }
};
