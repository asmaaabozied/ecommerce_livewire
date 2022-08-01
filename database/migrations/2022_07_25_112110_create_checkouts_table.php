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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name_ar');
            $table->string('product_name_en');
            $table->string('client_email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('shipping');
            $table->string('zip');
            $table->string('phone');
            $table->string('notes');
            $table->string('payment');
            $table->string('image');
            $table->string('price');
            $table->string('quantity');
            $table->string('total');
            $table->string('subtotal');
            $table->string('copoun');
            $table->string('block');
            $table->string('street');
            $table->string('apartment');
            $table->string('city');
            $table->string('region');
            $table->string('governorate');
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
        Schema::dropIfExists('checkouts');
    }
};
