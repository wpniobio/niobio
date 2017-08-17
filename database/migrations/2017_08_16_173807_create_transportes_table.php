<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->increments('id');

            // Chave do Cte
            $table->string('infprot_chcte')->default(0);
            $table->string('chave')->default(0);

// VALOR DE SERVIÇO
            $table->string('vprest_vtprest')->default(0);
            $table->string('vprest_vrec')->default(0);

// TOMADOR
            // //
            // $table->string('emit_cpnj')->default(0);
            // $table->string('rem_cnpj')->default(0);
            // $table->string('dest_cnpj')->default(0);
            $table->string('ide_toma_toma')->default(0);
            $table->string('tomador')->default(0);

// COLUNAS DE ICMS

            // ICMS ICMS
            $table->string('imp_icms_icms_cst')->default(0);
            $table->string('imp_icms_icms_vbc')->default(0);
            $table->string('imp_icms_icms_picms')->default(0);
            $table->string('imp_icms_icms_vicms')->default(0);
            // ICMS ICMS20
            $table->string('imp_icms_icms_predbc')->default(0);
            // ICMS ICMS45
            // ICMS ICMS60
            $table->string('imp_icms_icms_vbcstret')->default(0);
            $table->string('imp_icms_icms_vicmsstret')->default(0);
            $table->string('imp_icms_icms_picmsstret')->default(0);
            $table->string('imp_icms_icms_vcred')->default(0);
            // ICMS ICMS90
            
            $table->json('cte_completo')->default(0);

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
        Schema::dropIfExists('transportes');
    }
}
