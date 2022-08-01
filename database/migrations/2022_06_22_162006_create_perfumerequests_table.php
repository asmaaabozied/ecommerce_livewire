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
        Schema::create('perfumerequests', function (Blueprint $table) {
            $table->id();
            $table->string('req_name');
            $table->string('quantity');
            $table->string('category');
            $table->string('cost');
            $table->string('stock');
            $table->string('count_in_stock');
            $table->string('count_in_rate');
            $table->string('date');
            $table->boolean('status')->nullable()->default(1);
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
        Schema::dropIfExists('perfumerequests');
    }
};
