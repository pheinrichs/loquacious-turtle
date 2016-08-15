<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobImages', function(Blueprint $table)
		{
			$table->integer('imageID', true);
			$table->integer('customerID')->nullable();
			$table->integer('jobNumber')->nullable();
			$table->string('label1', 16)->nullable();
			$table->string('label2', 16)->nullable();
			$table->string('label3', 32)->nullable();
			$table->string('label4', 32)->nullable();
			$table->string('label5', 32)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobImages');
	}

}
