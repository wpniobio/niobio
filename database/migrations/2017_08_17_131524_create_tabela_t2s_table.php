<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelaT2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabela_t2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uf')->default(0);
            $table->string('empresa_cnpj')->default(0);
            $table->string('numero_da_nota')->default(0);
            $table->string('xprod')->default(0);
            $table->string('cprod')->default(0);
            $table->string('sprod')->default(0);
            $table->string('prod_ncm')->default(0);
            $table->string('cfop')->default(0);
            $table->string('qtrib')->default(0);
            $table->string('utrib')->default(0);
            $table->string('vuncom')->default(0); // Titulo de um campo da tabela pro usuario ver
            $table->string('valor_total_mercadoria')->default(0);// Unidade Tributada * Valor Unitario
            $table->string('valor_base_calculo')->default(0); // Revisar // ICMS
            $table->string('aliq')->default(0); // Revisar // ICMS
            $table->string('cst')->default(0); // Revisar // ICMS
            $table->string('valor_icms')->default(0); // Revisar // ICMS
            $table->string('valor_ipi')->default(0); // Revisar // IPI
            $table->string('valor_frete')->default(0); // Revisar // NOTAXML Ou CTEXML
            $table->string('valor_desconto')->default(0); // Revisar // NOTAXML
            $table->string('valor_seguro')->default(0); // Revisar // NOTAXML
            $table->string('valor_outras')->default(0); // Revisar // NOTAXML
            $table->string('cfop_entrada')->default(0); // Revisar //Usuário Converter
            $table->string('valor_icmsst')->default(0);// Revisar // NOTAXML
            $table->string('credito_glosa_antecipacao')->default(0); // Revisar // usuario Edita
            $table->string('valor_devolucao')->default(0); // Revisar // Usuario Edita
            $table->string('aliq_interna_icms')->default(0); // Revisar // Usuário Edita
            $table->string('reducao_base_calculo')->default(0); // Revisar // Usuario Edita 
            $table->string('valor_pauta')->default(0); // Revisa // Usuario Edita
            $table->string('mva')->default(0); // Revisa // Formula
            $table->string('reducao_base_icmsst')->default(0); // Revisao // Usuario Edita
            $table->string('base_calculo_icmsst')->default(0); // Revisao // Usuario Edita
            $table->string('quantidade_em_kgun')->default(0); // Revisao // Usuario Edita
            $table->string('base_calculo_icmsst_pauta')->default(0); // Revisar // Formula
            
            {// Formula com base na Empresa-> Normal/Atacadista/Simples Nacional
            // ANTECIPAÇÃO PARCIAL NORMAL  -> Formula
            // ICMS-ST A RECOLHER NORMAL  -> Formula
            // ANTECIPAÇÃO PARCIAL AT-ST  -> Formula
            // ICMS-ST A RECOLHER AT-ST  -> Formula
            // ANTECIPAÇÃO PARCIAL SIMPLES  -> Formula
            // ANTECIPAÇÃO PARCIAL COM DESCONTO 20% SIMPLES  -> Formula
            // ICMS-ST A RECOLHER SIMPLES  -> Formula
            $table->string('antecipacao_parcial_normal')->default(0);
            $table->string('icmsst_recolher_normal')->default(0);
            $table->string('antecipacao_parcial_atst')->default(0);
            $table->string('icmsst_recolher_atst')->default(0);
            $table->string('antecipacao_parcial_simples')->default(0);
            $table->string('antecipacao_parcial_desconto_simples')->default(0);
            $table->string('icmsst_recolher_simples')->default(0);
            }
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
        Schema::dropIfExists('tabela_t2s');
    }
}
