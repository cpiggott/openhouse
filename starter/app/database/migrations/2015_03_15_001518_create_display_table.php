<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisplayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('displays', function(Blueprint $table)
				{
						$table->increments('id');
						$table->string('teamname', 64);
						$table->string('project_name', 64);
						$table->string('team_members', 256);
						$table->longtext('content');
						$table->integer('user_id')->unsigned();
						$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('displays');
	}

}
