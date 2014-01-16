<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the Users table
	    Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->string('username', 64);
		    $table->string('password', 64);
		    $table->string('email', 64);
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
		// Destroy the users table
	    Schema::dropIfExists('users');
	}

}