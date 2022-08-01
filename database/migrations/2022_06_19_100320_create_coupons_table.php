<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponsTable extends Migration {

	public function up()
	{
		Schema::create('coupons', function(Blueprint $table) {
			$table->increments('id');
			$table->string('value', 255)->nullable();
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->integer('number')->nullable();
			$table->string('name', 255)->nullable();
			$table->string('code', 255)->nullable();
			$table->string('type')->nullable();
			$table->string('times', 255)->nullable();
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('product_id')->unsigned()->nullable();
            $table->string('status')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('coupons');
	}
}
