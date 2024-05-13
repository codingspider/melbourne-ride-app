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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->decimal('discount', 8, 2);
            $table->decimal('min_amount', 8, 2);
            $table->enum('type', ['percentage', 'fixed'])->default('percentage');
            $table->unsignedInteger('limit')->nullable();
            $table->unsignedInteger('used_number')->default(0);
            $table->unsignedInteger('status')->nullable()->comment('0=>Active; 1=>Inactive');
            $table->string('expires_at')->nullable();
            $table->string('from_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
