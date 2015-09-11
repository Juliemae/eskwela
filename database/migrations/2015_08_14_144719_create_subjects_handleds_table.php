<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsHandledsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects_handleds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject_code', 60);
			$table->integer('subject_id');
			$table->integer('teacher_id');
			$table->string('school_id', 15);
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
		Schema::drop('subjects_handleds');
	}

}
