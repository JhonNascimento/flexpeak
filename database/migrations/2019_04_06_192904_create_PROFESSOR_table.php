<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePROFESSORTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROFESSOR', function (Blueprint $table) {
            $table->increments('ID_PROFESSOR');
			$table->string('NOME');
			$table->date('DATA_NASCIMENTO')->nullable();
			$table->date('DATA_CRIACAO')->nullable();
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
        Schema::dropIfExists('PROFESSOR');
    }
}
