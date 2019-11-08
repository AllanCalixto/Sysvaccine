<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('i_nome');
            $table->string('i_sobrenome');
            $table->string('i_cpf');
            $table->string('i_data');
            $table->string('i_fone');
            $table->string('i_cidade');
            $table->string('i_estado');
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
        Schema::dropIfExists('cartaos');
    }
}
