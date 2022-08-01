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
        Schema::create('payment_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('tab')->nullable()->default(1);
            $table->boolean('paypal')->nullable()->default(1);
            $table->string('tab_secret_key')->nullable();
            $table->string('tab_public_key')->nullable();
            $table->string('paypal_client_id')->nullable();
            $table->string('paypal_secret_key')->nullable();
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
        Schema::dropIfExists('payment_settings');
    }
};
