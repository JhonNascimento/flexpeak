<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateALUNOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ALUNO', function (Blueprint $table) {
            $table->increments('ID_ALUNO');
			$table->string('NOME');
			$table->date('DATA_NASCIMENTO')->nullable();
			$table->string('LOGRADOURO');
			$table->integer('NUMERO');
			$table->string('BAIRRO');
			$table->string('CIDADE');
			$table->string('ESTADO');
			$table->date('DATA_CRIACAO')->nullable();
			$table->string('CEP');
			$table->integer('ID_CURSO');
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
        Schema::dropIfExists('ALUNO');
    }
}
