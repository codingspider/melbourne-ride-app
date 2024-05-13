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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('support_title')->nullable();
            $table->text('support_description')->nullable();
            $table->string('reservation_title')->nullable();
            $table->text('reservation_description')->nullable();
            $table->string('location_title')->nullable();
            $table->text('location_description')->nullable();
            $table->text('who_are_we_description')->nullable();
            $table->text('stats_one_title')->nullable();
            $table->text('stats_one_number')->nullable();
            $table->text('stats_two_title')->nullable();
            $table->text('stats_two_number')->nullable();
            $table->text('stats_three_title')->nullable();
            $table->text('stats_three_number')->nullable();

            $table->text('stats_four_title')->nullable();
            $table->text('stats_four_number')->nullable();
            
            $table->text('section_title')->nullable();
            $table->text('section_description')->nullable();
            
            $table->text('section_block_1_title')->nullable();
            $table->text('section_block_1_description')->nullable();

            $table->text('section_block_2_title')->nullable();
            $table->text('section_block_2_description')->nullable();

            $table->text('section_block_3_title')->nullable();
            $table->text('section_block_3_description')->nullable();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
