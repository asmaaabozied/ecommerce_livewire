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
        Schema::create('last_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('rate');
            $table->string('rateNumbers');
            $table->string('image');
            $table->string('price');
            $table->string('stock');
            $table->softDeletes();
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
        Schema::dropIfExists('last_offers');
    }
};
