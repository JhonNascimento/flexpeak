<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCURSOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CURSO', function (Blueprint $table) {
            $table->increments('ID_CURSO');
			$table->string('NOME');
			$table->date('DATA_CRIACAO')->nullable();
			$table->integer('ID_PROFESSOR');
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
        Schema::dropIfExists('CURSO');
    }
}
