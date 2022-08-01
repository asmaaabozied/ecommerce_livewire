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
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('seller_id');
            $table->string('perfume_name_en');
            $table->string('perfume_name_ar');
            $table->string('price');
            $table->string('quantity');
            $table->string('discount');
            $table->string('category');
            $table->string('desc_en');
            $table->string('desc_ar');
            $table->string('stock');
            $table->string('count_in_stock');
            $table->string('count_in_rate');
            $table->string('image');
            $table->boolean('availabilty')->default(1)->nullable();
            $table->string('date');
            $table->string('rate');
            $table->boolean('offers')->default(0)->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('value_offer')->nullable();
            $table->integer('star_rating');
            $table->boolean('status')->default(1)->nullable();
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
        Schema::dropIfExists('perfumes');
    }
};
