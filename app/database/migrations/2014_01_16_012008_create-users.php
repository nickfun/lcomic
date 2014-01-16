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

		$sDateFormat = 'Y-m-d h:i:s';

		// make a default admin user
		DB::table('users')->insertGetId(array(
			'username' => 'admin',
			'password' => Hash::make('password1'),
			'email' => 'hello@nick.gs',
			'created_at' => date($sDateFormat),
			'updated_at' => date($sDateFormat),
			));
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