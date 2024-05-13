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
        Schema::create('taxi_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('invoice_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('fleet_id');
            $table->string('pick_up_date');
            $table->string('pick_up_time');

            $table->string('point_a');
            $table->string('point_b');
            
            $table->string('pick_up_location');
            $table->string('drop_off_location');

            $table->string('number_of_passenger')->nullable();
            $table->string('number_of_luggage')->nullable();
            $table->string('flight_number')->nullable();
            
            $table->longText('return_service')->nullable();
            $table->longText('amenities')->nullable();
            $table->longText('passanger_infos')->nullable();

            $table->text('stops')->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('vat', 10, 2);

            $table->string('promo_code')->nullable();
            $table->string('payment_method');
            $table->integer('status')->default(0)->comment('0=>pending; 1=>accepted; 2=>completed; 3=>cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxi_bookings');
    }
};
