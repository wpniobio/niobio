<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speds', function (Blueprint $table) {
            $table->increments('id');
            
            // 0000
            $table->string('zero0000_cod_ver')->default('0.00');
            $table->string('zero0000_dt_ini')->default('0.00');
            $table->string('zero0000_dt_fin')->default('0.00');
            $table->string('zero0000_cnpj')->default('0.00');

            // 0200
            //$table->string('zero0200_reg')->default('0.00');
            $table->string('zero0200_cod_item')->default('0.00');
            $table->string('zero0200_descr_item')->default('0.00');
            $table->string('zero0200_cod_barra')->default('0.00');
            $table->string('zero0200_cod_ant_item')->default('0.00');
            $table->string('zero0200_unid_inv')->default('0.00');
            $table->string('zero0200_tipo_item')->default('0.00');
            $table->string('zero0200_cod_ncm')->default('0.00');
            $table->string('zero0200_exp_ipi')->default('0.00');
            $table->string('zero0200_cod_gen')->default('0.00');
            $table->string('zero0200_cod_lst')->default('0.00');
            $table->string('zero0200_aliq_icms')->default('0.00');
            $table->string('zero0200_cest')->default('0.00');

            // 0150
            //$table->string('zero0150_reg')->default('0.00');
            $table->string('zero0150_cod_part')->default('0.00');
            $table->string('zero0150_cnpj')->default('0.00');
            $table->string('zero0150_cpf')->default('0.00');
            $table->string('zero0150_ie')->default('0.00');

            // c100
            //$table->string('c100_reg')->default('0.00');
            $table->string('c100_ind_oper')->default('0.00');
            $table->string('c100_ind_emit')->default('0.00');
            $table->string('c100_cod_part')->default('0.00');
            $table->string('c100_cod_mod')->default('0.00');
            $table->string('c100_cod_sit')->default('0.00');
            $table->string('c100_ser')->default('0.00');
            $table->string('c100_num_doc')->default('0.00');
            $table->string('c100_chv_nfe')->default('0.00');
            $table->string('c100_dt_doc')->default('0.00');
            $table->string('c100_dt_e_s')->default('0.00');
            $table->string('c100_vl_doc')->default('0.00');
            $table->string('c100_ind_pgto')->default('0.00');
            $table->string('c100_vl_desc')->default('0.00');
            $table->string('c100_vl_abat_nt')->default('0.00');
            $table->string('c100_vl_merc')->default('0.00');
            $table->string('c100_ind_frt')->default('0.00');
            $table->string('c100_vl_frt')->default('0.00');
            $table->string('c100_vl_seg')->default('0.00');
            $table->string('c100_vl_out_da')->default('0.00');
            $table->string('c100_vl_bc_icms')->default('0.00');
            $table->string('c100_vl_icms')->default('0.00');
            $table->string('c100_bc_icms_st')->default('0.00');
            $table->string('c100_vl_ipi')->default('0.00');
            $table->string('c100_vl_pis')->default('0.00');
            $table->string('c100_vl_cofins')->default('0.00');
            $table->string('c100_vl_pis_st')->default('0.00');
            $table->string('c100_vl_cofins_st')->default('0.00');

            // C170
            //$table->string('c170_reg')->default('0.00');
            $table->string('c170_num_item')->default('0.00');
            $table->string('c170_cod_item')->default('0.00');
            $table->string('c170_descr_compl')->default('0.00');
            $table->string('c170_qtd')->default('0.00');
            $table->string('c170_unid')->default('0.00');
            $table->string('c170_vl_item')->default('0.00');
            $table->string('c170_vl_desc')->default('0.00');
            $table->string('c170_ind_mov')->default('0.00');
            $table->string('c170_cst_icms')->default('0.00');
            $table->string('c170_cfop')->default('0.00');
            $table->string('c170_cod_nat')->default('0.00');
            $table->string('c170_vl_bc_icms')->default('0.00');
            $table->string('c170_aliq_icms')->default('0.00');
            $table->string('c170_vl_icms')->default('0.00');
            $table->string('c170_vl_bc_icms_st')->default('0.00');
            $table->string('c170_aliq_st')->default('0.00');
            $table->string('c170_ind_apur')->default('0.00');
            $table->string('c170_cst_ipi')->default('0.00');
            $table->string('c170_cod_enq')->default('0.00');
            $table->string('c170_vl_bc_ipi')->default('0.00');
            $table->string('c170_aliq_ipi')->default('0.00');
            $table->string('c170_vl_ipi')->default('0.00');
            $table->string('c170_cst_pis')->default('0.00');
            $table->string('c170_vl_bc_pis')->default('0.00');
            $table->string('c170_aliq_pis_percent')->default('0.00');
            $table->string('c170_quant_bc_pis')->default('0.00');
            $table->string('c170_aliq_pis_reais')->default('0.00');
            $table->string('c170_vl_pis')->default('0.00');
            $table->string('c170_cst_cofins')->default('0.00');
            $table->string('c170_vl_bc_cofins')->default('0.00');
            $table->string('c170_aliq_cofins_percent')->default('0.00');
            $table->string('c170_quant_bc_cofins')->default('0.00');
            $table->string('c170_aliq_cofins_reais')->default('0.00');
            $table->string('c170_vl_cofins')->default('0.00');
            $table->string('c170_cod_cta')->default('0.00');

            // c190
            //$table->string('c190_reg')->default('0.00');
            $table->string('c190_cst_icms')->default('0.00');
            $table->string('c190_cfop')->default('0.00');
            $table->string('c190_aliq_icms')->default('0.00');
            $table->string('c190_vl_opr')->default('0.00');
            $table->string('c190_vl_bc_icms')->default('0.00');
            $table->string('c190_vl_icms')->default('0.00');
            $table->string('c190_vl_bc_icms_st')->default('0.00');
            $table->string('c190_vl_icms_st')->default('0.00');
            $table->string('c190_vl_red_bc')->default('0.00');
            $table->string('c190_vl_ipi')->default('0.00');
            $table->string('c190_cod_obs')->default('0.00');

            // C195
            //$table->string('c195_reg')->default('0.00');
            $table->string('c195_cod_obs')->default('0.00');
            $table->string('c195_txt_compl')->default('0.00');

            // d100
            //$table->string('d100_reg')->default('0.00');
            $table->string('d100_ind_oper')->default('0.00');
            $table->string('d100_ind_emit')->default('0.00');
            $table->string('d100_cod_part')->default('0.00');
            $table->string('d100_cod_mod')->default('0.00');
            $table->string('d100_cod_sit')->default('0.00');
            $table->string('d100_ser')->default('0.00');
            $table->string('d100_sub')->default('0.00');
            $table->string('d100_num_doc')->default('0.00');
            $table->string('d100_chv_cte')->default('0.00');
            $table->string('d100_dt_doc')->default('0.00');
            $table->string('d100_dt_a_p')->default('0.00');
            $table->string('d100_tp_ct-e')->default('0.00');
            $table->string('d100_chv_cte_ref')->default('0.00');
            $table->string('d100_vl_doc')->default('0.00');
            $table->string('d100_vl_desc')->default('0.00');
            $table->string('d100_ind_frt')->default('0.00');
            $table->string('d100_vl_serv')->default('0.00');
            $table->string('d100_vl_bc_icms')->default('0.00');
            $table->string('d100_vl_icms')->default('0.00');
            $table->string('d100_vl_nt')->default('0.00');
            $table->string('d100_cod_inf')->default('0.00');
            $table->string('d100_cod_cta ')->default('0.00');

            // d190
            //$table->string('d190_reg')->default('0.00');
            $table->string('d190_icms')->default('0.00');
            $table->string('d190_cfop')->default('0.00');
            $table->string('d190_aliq_icms')->default('0.00');
            $table->string('d190_vl_opr')->default('0.00');
            $table->string('d190_vl_bc_icms')->default('0.00');
            $table->string('d190_vl_red_bc')->default('0.00');
            $table->string('d190_cod_obs')->default('0.00');

            // d400
            //$table->string('d400_reg')->default('0.00');
            $table->string('d400_cod_part')->default('0.00');
            $table->string('d400_cod_mod')->default('0.00');
            $table->string('d400_cod_sit')->default('0.00');
            $table->string('d400_ser')->default('0.00');
            $table->string('d400_sub')->default('0.00');
            $table->string('d400_num_doc')->default('0.00');
            $table->string('d400_dt_doc')->default('0.00');
            $table->string('d400_vl_doc')->default('0.00');
            $table->string('d400_vl_desc')->default('0.00');
            $table->string('d400_vl_serv')->default('0.00');
            $table->string('d400_bc_icms')->default('0.00');
            $table->string('d400_vl_icms')->default('0.00');
            $table->string('d400_vl_pis')->default('0.00');
            $table->string('d400_vl_cofins')->default('0.00');
            $table->string('d400_cod_cta')->default('0.00');

            // d500
            //$table->string('d500_reg')->default('0.00');
            $table->string('d500_ind_oper')->default('0.00');
            $table->string('d500_ind_emit')->default('0.00');
            $table->string('d500_cod_part')->default('0.00');
            $table->string('d500_cod_mod')->default('0.00');
            $table->string('d500_cod_sit')->default('0.00');
            $table->string('d500_ser')->default('0.00');
            $table->string('d500_sub')->default('0.00');
            $table->string('d500_num_doc')->default('0.00');
            $table->string('d500_dt_doc')->default('0.00');
            $table->string('d500_dt_a_p')->default('0.00');
            $table->string('d500_vl_doc')->default('0.00');
            $table->string('d500_vl_desc')->default('0.00');
            $table->string('d500_vl_serv')->default('0.00');
            $table->string('d500_vl_serv_nt')->default('0.00');
            $table->string('d500_vl_terc')->default('0.00');
            $table->string('d500_vl_da')->default('0.00');
            $table->string('d500_vl_bc_icms')->default('0.00');
            $table->string('d500_vl_icms')->default('0.00');
            $table->string('d500_cod_inf')->default('0.00');
            $table->string('d500_vl_pis')->default('0.00');
            $table->string('d500_vl_cofins')->default('0.00');
            $table->string('d500_cod_cta')->default('0.00');
            $table->string('d500_tp_assinante')->default('0.00');

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
        Schema::dropIfExists('speds');
    }
}
