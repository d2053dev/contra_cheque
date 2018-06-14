<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

						//user data
						$table->string('name', 45);

						//auth data
						$table->string('login', 45)->unique;
						$table->string('pass', 254)->unique;

						//permission data
						$table->string('status')->default('active');
						$table->string('permission')->default('app.adm');

						$table->rememberToken();
            $table->timestamps();
						$table->softDeletes();

						created_at
						updated_at
						deleted_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
