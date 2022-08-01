<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_ar')->nullable();
			$table->string('name_en')->nullable();
			$table->string('image')->nullable();
            $table->boolean('status')->nullable()->default(1);

            $table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('brands');
	}
}
