<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cpf', 15)->unique();
			$table->string('nome');
			$table->string('email')->unique();
			$table->string('telefone', 15);
			$table->integer('curso');
			$table->string('faculdade');
			$table->string('instituicao');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}

