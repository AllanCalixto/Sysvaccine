<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('nomevacina',[
              'BCG','DTP(difteria, tétano e coqueluche)','DUPLA ADULTO','FEBRE AMARELA',
              'INFLUENZA','HEPATITE A','HEPATITE B','HPV','MENINGOCÓCICA C (conjulgada)',
              'PENTA (difteria, tétano, coqueluche, hepatite B e infecções causadas pelo Haemophilus influenzae B)',
              'PNEUMOCÓCICA 10 VALENTE (conjulgada)','PNEUMOCÓCICA 23 VALENTE','POLIOMELITE 1,2 e 3 (VIP)','ROTAVIRUS',
              'TÉTANO','TETRA VIRAL','TRíPLICE VIRAL','VARICELA ATENUADA',
            ]);
            $table->enum('dose',[
                'dose1','dose2','dose3','reforco'
            ]);
            $table->string('data');
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
        Schema::dropIfExists('vacinas');
    }
}
