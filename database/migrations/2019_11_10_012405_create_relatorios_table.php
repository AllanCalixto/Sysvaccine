<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_user');
            $table->string('lastname_user');
            $table->string('cpf')->unique();
            $table->string('birth_user');
            $table->string('fone_user');
            $table->string('city_user');
            $table->enum('uf', [
                'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO',
                'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI',
                'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO']);
           $table->enum('nomevacina_vacina',[
                    'BCG','DTP(difteria, tétano e coqueluche)','DUPLA ADULTO','FEBRE AMARELA',
                    'INFLUENZA','HEPATITE A','HEPATITE B','HPV','MENINGOCÓCICA C (conjulgada)',
                    'PENTA (difteria, tétano, coqueluche, hepatite B e infecções causadas pelo Haemophilus influenzae B)',
                    'PNEUMOCÓCICA 10 VALENTE (conjulgada)','PNEUMOCÓCICA 23 VALENTE','POLIOMELITE 1,2 e 3 (VIP)','ROTAVIRUS',
                    'TÉTANO','TETRA VIRAL','TRíPLICE VIRAL','VARICELA ATENUADA',
                  ]);
          $table->string('data_vacina');
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
        Schema::dropIfExists('relatorios');
    }
}
