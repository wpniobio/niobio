<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateTabelat3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelat3s', function (Blueprint $table) {
            $table->increments('id');
            // OBS: Usuario que Criou ou modificou
            $table->string('user_id');
            $table->string('ide_demi')->default('0.00');
            // nota 3.1'0.00'
            $table->string('ide_dhemi')->default('0.00');
            $table->string('ide_dhsaient')->default('0.00');
            $table->string('ide_dsaient')->default('0.00');
            $table->string('ide_hsaient')->default('0.00');
            //
            $table->string('det_prod_cean')->default('0.00');
            $table->string('det_prod_ceantrib')->default('0.00');

            $table->string('ide_cuf')->default('0.00');
            $table->string('emit_cnpj')->default('0.00');
            $table->string('infprot_chnfe')->default('0.00');
            $table->string('det_prod_xprod')->default('0.00');
            $table->string('det_prod_cprod')->default('0.00');
            $table->string('sprod')->default('0.00'); // Revisar
            // OBSERVAÇÃO cfop Reclassificado
            $table->string('det_prod_ncm')->default('0.00');
            $table->string('det_prod_cfop')->default('0.00');
            $table->string('det_prod_qtrib')->default('0.00');
            $table->string('det_prod_utrib')->default('0.00');
            $table->string('det_prod_vuncom')->default('0.00'); // Titulo de um campo da tabela pro usuario ver
            $table->string('valor_mercadoria')->default('0.00');// Unidade Tributada * Valor Unitario

            // CST de PIS e COFINS [de Entrada, Digitado pelo usuário]
            // OBS: Fazer De para, CST de entrada. 
            // Crédito de PIS e COFINS
            
            // icms normal
            $table->string('det_imposto_icms_icms_vbc')->default('0.00'); // Revisar // ICMS
            $table->string('det_imposto_icms_icms_picms')->default('0.00'); // Revisar // ICMS
            $table->string('det_imposto_icms_icms_cst')->default('0.00'); // Revisar // ICMS
            
            // st
            $table->string('det_imposto_icms_icmsst_vbcstret')->default('0.00');
            $table->string('det_imposto_icms_icmsst_cst')->default('0.00');

            // CST PIS COFINS
            $table->string('det_imposto_pis_pisaliq_cst')->default('0.00');
            $table->string('det_imposto_cofins_pisaliq_cst')->default('0.00');

            // Natureza
            $table->string('natureza')->default('0.00');

            $table->string('valor_icms')->default('0.00'); // Revisar // ICMS
            $table->string('det_imposto_ipi_ipitrib_vipi')->default('0.00'); // Revisar // IPI
            $table->string('total_icmstot_vfrete')->default('0.00'); // Revisar // NOTAXML Ou CTEXML
            // OBS
            // Distribuição do valor do frete em uma coluna, item a item, proporcionalmente por valores.
            // 
            $table->string('total_icmstot_vdesc')->default('0.00'); // Revisar // NOTAXML
            $table->string('total_icmstot_vseg')->default('0.00'); // Revisar // NOTAXML
            $table->string('total_icmstot_voutro')->default('0.00'); // Revisar // NOTAXML
            $table->string('cfop_entrada')->default('0.00'); // Revisar //Usuário Converter
            $table->string('valor_icmsst')->default('0.00');// Revisar // NOTAXML
            
            $table->string('credito_glosa_antecipacao')->default('0.00'); // Revisar // usuario Edita
            $table->string('valor_devolucao')->default('0.00'); // Revisar // Usuario Edita
            $table->string('aliq_interna_icms')->default('0.00'); // Revisar // Usuário Edita
            $table->string('reducao_base_calculo')->default('0.00'); // Revisar // Usuario Edita 
            $table->string('valor_pauta')->default('0.00'); // Revisa // Usuario Edita
            $table->string('mva')->default('0.00'); // Revisa // Formula
            $table->string('reducao_base_icmsst')->default('0.00'); // Revisao // Usuario Edita
            $table->string('base_calculo_icmsst')->default('0.00'); // Revisao // Usuario Edita
            $table->string('quantidade_em_kgun')->default('0.00'); // Revisao // Usuario Edita
            $table->string('base_calculo_icmsst_pauta')->default('0.00'); // Revisar // Formula
            
            {// Formula com base na Empresa-> Normal/Atacadista/Simples Nacional
            // ANTECIPAÇÃO PARCIAL NORMAL  -> Formula
            // ICMS-ST A RECOLHER NORMAL  -> Formula
            // ANTECIPAÇÃO PARCIAL AT-ST  -> Formula
            // ICMS-ST A RECOLHER AT-ST  -> Formula
            // ANTECIPAÇÃO PARCIAL SIMPLES  -> Formula
            // ANTECIPAÇÃO PARCIAL COM DESCONTO 20% SIMPLES  -> Formula
            // ICMS-ST A RECOLHER SIMPLES  -> Formula
            $table->string('antecipacao_parcial_normal')->default('0.00'); // ANTECIPAÇÃO PARCIAL NORMAL  -> Formula
            $table->string('icmsst_recolher_normal')->default('0.00'); // ICMS-ST A RECOLHER NORMAL  -> Formula
            $table->string('antecipacao_parcial_atst')->default('0.00'); // ANTECIPAÇÃO PARCIAL AT-ST  -> Formula
            $table->string('icmsst_recolher_atst')->default('0.00'); // ICMS-ST A RECOLHER AT-ST  -> Formula
            $table->string('antecipacao_parcial_simples')->default('0.00'); // ANTECIPAÇÃO PARCIAL SIMPLES  -> Formula
            $table->string('antecipacao_parcial_desconto_simples')->default('0.00'); // ANTECIPAÇÃO PARCIAL COM DESCONTO 20% SIMPLES  -> Formula
            $table->string('icmsst_recolher_simples')->default('0.00'); // ICMS-ST A RECOLHER SIMPLES  -> Formula
            }
            {// STATUS
            $table->string('status')->default('0');

            }
            $table->timestamp('created_at')->default( Carbon::now()->toDateTimeString() );
            $table->timestamp('updated_at');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabelat3s');
    }
}
