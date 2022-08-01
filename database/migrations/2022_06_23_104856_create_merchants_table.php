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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_email')->unique();
            $table->string('m_password');
            $table->string('merchant_name');
            $table->string('packages');
            $table->string('quantity');
            $table->string('image');
            $table->string('discount');
            $table->string('price');
            $table->string('pay');
            $table->string('date');
            $table->boolean('status')->default(1)->nullable();
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
        Schema::dropIfExists('merchants');
    }
};
