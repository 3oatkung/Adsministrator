<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads_schedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('ads_id')->unsigned();
			$table->smallInteger('T01')->default(1)->nullable();
			$table->smallInteger('T02')->default(1)->nullable();
			$table->smallInteger('T03')->default(1)->nullable();
			$table->smallInteger('T04')->default(1)->nullable();
			$table->smallInteger('T05')->default(1)->nullable();
			$table->smallInteger('T06')->default(1)->nullable();
			$table->smallInteger('T07')->default(1)->nullable();
			$table->smallInteger('T08')->default(1)->nullable();
			$table->smallInteger('T09')->default(1)->nullable();
			$table->smallInteger('T10')->default(1)->nullable();
			$table->smallInteger('T11')->default(1)->nullable();
			$table->smallInteger('T12')->default(1)->nullable();
			$table->smallInteger('T13')->default(1)->nullable();
			$table->smallInteger('T14')->default(1)->nullable();
			$table->smallInteger('T15')->default(1)->nullable();
			$table->smallInteger('T16')->default(1)->nullable();
			$table->smallInteger('T17')->default(1)->nullable();
			$table->smallInteger('T18')->default(1)->nullable();
			$table->smallInteger('T19')->default(1)->nullable();
			$table->smallInteger('T20')->default(1)->nullable();
			$table->smallInteger('T21')->default(1)->nullable();
			$table->smallInteger('T22')->default(1)->nullable();
			$table->smallInteger('T23')->default(1)->nullable();
			$table->smallInteger('T24')->default(1)->nullable();
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
		Schema::drop('ads_schedules');
	}

}
