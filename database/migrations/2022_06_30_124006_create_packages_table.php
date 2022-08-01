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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();

            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('type')->nullable();
            $table->string('duration')->nullable();
            $table->boolean('status')->nullable()->default(1);

             $table->string('image')->nullable();

            $table->string('price');
            $table->string('rate');
            $table->string('count_in_rate');
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
        Schema::dropIfExists('packages');
    }
};
