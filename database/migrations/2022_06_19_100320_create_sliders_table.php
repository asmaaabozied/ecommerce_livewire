<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image')->nullable();
			$table->string('name_ar')->nullable();
			$table->string('name_en')->nullable();
			$table->string('description_ar')->nullable();
			$table->string('description_en')->nullable();
            $table->boolean('status')->nullable()->default(1);

            $table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('sliders');
	}
}
