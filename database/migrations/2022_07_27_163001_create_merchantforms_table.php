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
        Schema::create('merchantforms', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('address');
            $table->string('name');
            $table->string('required_number');
            $table->string('share_capital');
            $table->string('phone');
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
        Schema::dropIfExists('merchantforms');
    }
};
