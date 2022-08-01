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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('client_email')->unique();
            $table->string('username');
            $table->string('phone');
            $table->string('address');
            $table->string('quantity');
            $table->string('total');
            $table->string('discount');
            $table->string('subtotal');
            $table->string('product');
            $table->string('shipingcompany');
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
        Schema::dropIfExists('bills');
    }
};
