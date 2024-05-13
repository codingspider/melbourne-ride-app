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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_address');
            $table->string('mobile_number');
            $table->string('pick_up_location');
            $table->string('drop_off_location');
            $table->string('retun_pick_up')->nullable();
            $table->string('return_drop_off')->nullable();
            $table->string('extra_wait')->nullable();
            $table->string('baby_seat')->nullable();
            $table->string('hours')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('no_of_passangers')->nullable();
            $table->string('service_type')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('add_stop')->nullable();
            $table->string('other_charge')->nullable();
            $table->string('gst')->nullable();
            $table->string('discount')->nullable();
            $table->string('late_early_charge')->nullable();
            $table->string('invoice_total')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('due_date')->nullable();
            $table->string('pick_up_date')->nullable();
            $table->string('pick_up_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
