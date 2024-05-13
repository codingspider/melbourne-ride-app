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
        Schema::create('examinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('name');
            $table->string('duration')->nullable();
            $table->double('total_mark', 10, 2);
            $table->double('pass_mark', 10, 2);
            $table->boolean('negative_mark')->nullable();
            $table->float('negative_mark_value')->nullable();
            $table->integer('status')->default(1)->comment('1=>Active; 0=>Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinations');
    }
};
