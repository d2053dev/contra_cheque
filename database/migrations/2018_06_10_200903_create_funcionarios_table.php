<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateFuncionariosTable.
 */
class CreateFuncionariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table) {
            $table->increments('id');

						//dados do funcionário
						$table->char('name', 60);
						$table->string('cpf', 11)->unique();
						$table->char('phone', 10);
						$table->date('birth');
						$table->char('gender', 1)->nullable();
						$table->string('email', 60)->nullable();
						$table->text('notes')->nullable();
						$table->floatval('salary');
						$table->boolval('insal')->nullable();
						$table->bollval('pericul')->nullable();
						$table->string('func', 30);
						$table->integer('empresa')->unsigned();

            $table->timestamps();
						$table->oftDeletes();

						$table->foreign('empresa')->references('idcliente')-on('clientes');

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
		Schema::table('funcionarios', function(Blueprint $table) {
			$table->dropForeign('funcionarios_empresa_foreign');
		});
		Schema::drop('funcionarios');
	}
}
