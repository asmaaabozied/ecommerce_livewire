<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('footer_color')->nullable();
            $table->string('header_color')->nullable();
            $table->string('colors')->nullable();
            $table->string('color_button')->nullable();
            $table->string('color_line')->nullable();
            $table->string('size_header')->nullable();
            $table->string('size_footer')->nullable();
            $table->string('hover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_settings');
    }
};
