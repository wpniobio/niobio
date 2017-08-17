<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinatariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinatarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('infprot_chnfe');
            // e - dest
            $table->string('dest_cnpj')->default(0);
            $table->string('dest_cpf')->default(0);
            $table->string('dest_xnome')->default(0);
            //      enderdest
            $table->string('dest_enderdest_xlgr')->default(0);
            $table->string('dest_enderdest_nro')->default(0);
            $table->string('dest_enderdest_xcpl')->default(0);
            $table->string('dest_enderdest_xbairro')->default(0);
            $table->string('dest_enderdest_cmun')->default(0);
            $table->string('dest_enderdest_xmun')->default(0);
            $table->string('dest_enderdest_uf')->default(0);
            $table->string('dest_enderdest_cep')->default(0);
            $table->string('dest_enderdest_cpais')->default(0);
            $table->string('dest_enderdest_xpais')->default(0);
            $table->string('dest_enderdest_fone')->default(0);
            $table->string('dest_enderdest_ie')->default(0);
            $table->string('dest_enderdest_isuf')->default(0);
            $table->string('dest_enderdest_cnpj')->default(0);
            // 3.10
            $table->string('dest_indiedest')->default(0);
            $table->string('dest_ie')->default(0);
            // f - retirada
            $table->string('retirada_cnpj')->default(0);
            $table->string('retirada_cpf')->default(0);
            $table->string('retirada_xlgr')->default(0);
            $table->string('retirada_nro')->default(0);
            $table->string('retirada_xcpl')->default(0);
            $table->string('retirada_xbairro')->default(0);
            $table->string('retirada_cmun')->default(0);
            $table->string('retirada_xmun')->default(0);
            $table->string('retirada_uf')->default(0);
            // g- entrega
            $table->string('entrega_cnpj')->default(0);
            $table->string('entrega_cpf')->default(0);
            $table->string('entrega_xlgr')->default(0);
            $table->string('entrega_nro')->default(0);
            $table->string('entrega_xcpl')->default(0);
            $table->string('entrega_xbairro')->default(0);
            $table->string('entrega_cmun')->default(0);
            $table->string('entrega_xmun')->default(0);
            $table->string('entrega_uf')->default(0);
             // d - avulsa
            $table->string('avulsa_cnpj')->default(0);
            $table->string('avulsa_xorgao')->default(0);
            $table->string('avulsa_xagente')->default(0);
            $table->string('avulsa_fone')->default(0);
            $table->string('avulsa_uf')->default(0);
            $table->string('avulsa_ndar')->default(0);
            $table->string('avulsa_demi')->default(0);
            $table->string('avulsa_vdar')->default(0);
            $table->string('avulsa_repemi')->default(0);
            $table->string('avulsa_dpag')->default(0);

            $table->string('dest_email')->default(0);

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
        Schema::dropIfExists('destinatarios');
    }
}
