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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');

            $table->string('section_1_heading')->nullable();
            $table->string('section_1_subheading')->nullable();

            $table->string('section_1_image')->nullable();
            $table->string('section_1_image_alt_tag')->nullable();

            $table->string('section_1_book_button_url')->nullable();
            $table->string('section_1_qoute_button_url')->nullable();

            $table->string('section_2_title')->nullable();
            $table->longText('section_2_content')->nullable();

            $table->string('section_3_title')->nullable();

            $table->string('section_3_image')->nullable();
            $table->string('section_3_image_alt_tag')->nullable();

            $table->longText('section_3_content')->nullable();
            $table->string('section_3_button_url')->nullable();

            $table->string('section_4_title')->nullable();

            $table->string('section_4_image')->nullable();
            $table->string('section_4_image_alt_tag')->nullable();

            $table->longText('section_4_content')->nullable();
            $table->string('section_4_button_url')->nullable();

            $table->string('section_5_title')->nullable();

            $table->string('section_5_image')->nullable();
            $table->string('section_5_image_alt_tag')->nullable();

            $table->longText('section_5_content')->nullable();
            $table->string('section_5_button_url')->nullable();

            $table->string('section_6_title')->nullable();
            $table->longText('section_6_content')->nullable();

            $table->string('section_7_heading')->nullable();
            $table->string('section_7_subheading')->nullable();

            $table->string('section_7_image')->nullable();
            $table->string('section_7_image_alt_tag')->nullable();

            $table->string('section_7_book_button_url')->nullable();
            $table->string('section_7_qoute_button_url')->nullable();

            $table->string('section_8_1_heading')->nullable();
            $table->longText('section_8_1_text')->nullable();

            $table->string('section_8_2_heading')->nullable();
            $table->longText('section_8_2_text')->nullable();

            $table->string('section_8_3_heading')->nullable();
            $table->longText('section_8_3_text')->nullable();

            $table->string('section_8_4_heading')->nullable();
            $table->longText('section_8_4_text')->nullable();

            $table->string('section_9_heading')->nullable();
            $table->longText('section_9_text')->nullable();

            $table->longText('why_choose_us')->nullable();
            $table->string('why_choose_button_url')->nullable();
            $table->longText('content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
