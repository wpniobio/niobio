<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuicaos', function (Blueprint $table) {
            $table->increments('id');

            // 0000
            $table->string('zero0000_cod_ver')->default(' - ');
            $table->string('zero0000_dt_ini')->default(' - ');
            $table->string('zero0000_dt_fin')->default(' - ');
            $table->string('zero0000_cnpj')->default(' - ');

            // 0110 Regime de apuração
            $table->string('zero0110_reg')->default(' - ');
            $table->string('zero0110_cod_inc_trib')->default(' - ');
            $table->string('zero0110_ind_apro_cred')->default(' - ');
            $table->string('zero0110_cod_tipo_cont')->default(' - ');
            $table->string('zero0110_ind_reg_cum')->default(' - ');

            // C380
            $table->string('c380_reg')->default(' - ');
            $table->string('c380_cod_mod')->default(' - ');
            $table->string('c380_dt_doc_ini')->default(' - ');
            $table->string('c380_dt_doc_fin')->default(' - ');
            $table->string('c380_num_doc_ini')->default(' - ');
            $table->string('c380_num_doc_fin')->default(' - ');
            $table->string('c380_vl_doc')->default(' - ');
            $table->string('c380_vl_doc_canc')->default(' - ');

            // 0200
            $table->string('zero0200_reg')->default(' - ');
            $table->string('zero0200_cod_item')->default(' - ');
            $table->string('zero0200_descr_item')->default(' - ');
            $table->string('zero0200_cod_barra')->default(' - ');
            $table->string('zero0200_cod_ant_item')->default(' - ');
            $table->string('zero0200_unid_inv')->default(' - ');
            $table->string('zero0200_tipo_item')->default(' - ');
            $table->string('zero0200_cod_ncm')->default(' - ');
            $table->string('zero0200_exp_ipi')->default(' - ');
            $table->string('zero0200_cod_gen')->default(' - ');
            $table->string('zero0200_cod_lst')->default(' - ');
            $table->string('zero0200_aliq_icms')->default(' - ');
            $table->string('zero0200_cest')->default(' - ');

            // 0150
            $table->string('zero0150_reg')->default(' - ');
            $table->string('zero0150_cod_part')->default(' - ');
            $table->string('zero0150_cnpj')->default(' - ');
            $table->string('zero0150_cpf')->default(' - ');
            $table->string('zero0150_ie')->default(' - ');

            // A100
            $table->string('a100_reg')->default(' - ');
            $table->string('a100_ind_oper')->default(' - ');
            $table->string('a100_ind_emit')->default(' - ');
            $table->string('a100_cod_part')->default(' - ');
            $table->string('a100_cod_sit')->default(' - ');
            $table->string('a100_ser')->default(' - ');
            $table->string('a100_sub')->default(' - ');
            $table->string('a100_num_doc')->default(' - ');
            $table->string('a100_chv_nfse')->default(' - ');
            $table->string('a100_dt_doc')->default(' - ');
            $table->string('a100_dt_exe_serv')->default(' - ');
            $table->string('a100_vl_doc')->default(' - ');
            $table->string('a100_ind_pgto')->default(' - ');
            $table->string('a100_vl_desc')->default(' - ');
            $table->string('a100_vl_bc_pis')->default(' - ');
            $table->string('a100_vl_pis')->default(' - ');
            $table->string('a100_vl_bc_cofins')->default(' - ');
            $table->string('a100_vl_pis_ret')->default(' - ');
            $table->string('a100_vl_iss')->default(' - ');
            
            
            // A170
            $table->string('a170_reg')->default(' - ');
            $table->string('a170_num_item')->default(' - ');
            $table->string('a170_cod_item')->default(' - ');
            $table->string('a170_descr_compl')->default(' - ');
            $table->string('a170_vl_item')->default(' - ');
            $table->string('a170_vl_desc')->default(' - ');
            $table->string('a170_nat_bc_cred')->default(' - ');
            $table->string('a170_ind_orig_cred')->default(' - ');
            $table->string('a170_cst_pis')->default(' - ');
            $table->string('a170_vl_bc_pis')->default(' - ');
            $table->string('a170_aliq_pis')->default(' - ');
            $table->string('a170_vl_pis')->default(' - ');
            $table->string('a170_cst_cofins')->default(' - ');
            $table->string('a170_vl_bc_cofins')->default(' - ');
            $table->string('a170_aliq_cofins')->default(' - ');
            $table->string('a170_vl_cofins')->default(' - ');
            $table->string('a170_cod_cta')->default(' - ');
            $table->string('a170_cod_ccus')->default(' - ');

            


            // C381
            $table->string('c381_reg')->default(' - ');
            $table->string('c381_cst_pis')->default(' - ');
            $table->string('c381_cod_item')->default(' - ');
            $table->string('c381_vl_item')->default(' - ');
            $table->string('c381_vl_bc_pis')->default(' - ');
            $table->string('c381_aliq_pis')->default(' - ');
            $table->string('c381_quant_bc_pis')->default(' - ');
            $table->string('c381_aliq_pis_quant')->default(' - ');
            $table->string('c381_vl_pis')->default(' - ');
            $table->string('c381_cod_cta')->default(' - ');

            // C385
            $table->string('c385_reg')->default(' - ');
            $table->string('c385_cst_cofins')->default(' - ');
            $table->string('c385_vl_item')->default(' - ');
            $table->string('c385_vl_bc_cofins')->default(' - ');
            $table->string('c385_aliq_cofins')->default(' - ');
            $table->string('c385_quant_bc_cofins')->default(' - ');
            $table->string('c385_aliq_cofins_quant')->default(' - ');
            $table->string('c385_vl_cofins')->default(' - ');
            $table->string('c385_cod_cta')->default(' - ');

            // C400
            $table->string('c400_reg')->default(' - ');
            $table->string('c400_cod_mod')->default(' - ');
            $table->string('c400_ecf_mod')->default(' - ');
            $table->string('c400_ecf_fab')->default(' - ');
            $table->string('c400_ecf_cx')->default(' - ');

            // C500
            $table->string('c500_reg')->default(' - ');
            $table->string('c500_cod_part')->default(' - ');
            $table->string('c500_cod_sit')->default(' - ');
            $table->string('c500_ser')->default(' - ');
            $table->string('c500_sub')->default(' - ');
            $table->string('c500_num_doc')->default(' - ');
            $table->string('c500_dt_doc')->default(' - ');
            $table->string('c500_dt_ent')->default(' - ');
            $table->string('c500_vl_doc')->default(' - ');
            $table->string('c500_vl_icms')->default(' - ');
            $table->string('c500_cod_inf')->default(' - ');
            $table->string('c500_vl_pis')->default(' - ');
            $table->string('c500_vl_cofins')->default(' - ');

            // C501
            $table->string('c501_reg')->default(' - ');
            $table->string('c501_cst_pis')->default(' - ');
            $table->string('c501_vl_item')->default(' - ');
            $table->string('c501_nat_bc_cred')->default(' - ');
            $table->string('c501_vl_bc_pis')->default(' - ');
            $table->string('c501_aliq_pis')->default(' - ');
            $table->string('c501_vl_pis')->default(' - ');
            $table->string('c501_cod_cta')->default(' - ');

            // C505
            $table->string('c505_reg')->default(' - ');
            $table->string('c505_cst_cofins')->default(' - ');
            $table->string('c505_vl_item')->default(' - ');
            $table->string('c505_nat_bc_cred')->default(' - ');
            $table->string('c505_vl_bc_cofins')->default(' - ');
            $table->string('c505_aliq_cofins')->default(' - ');
            $table->string('c505_vl_cofins')->default(' - ');
            $table->string('c505_cod_cta')->default(' - ');


            // c100
            $table->string('c100_reg')->default(' - ');
            $table->string('c100_ind_oper')->default(' - ');
            $table->string('c100_ind_emit')->default(' - ');
            $table->string('c100_cod_part')->default(' - ');
            $table->string('c100_cod_mod')->default(' - ');
            $table->string('c100_cod_sit')->default(' - ');
            $table->string('c100_ser')->default(' - ');
            $table->string('c100_num_doc')->default(' - ');
            $table->string('c100_chv_nfe')->default(' - ');
            $table->string('c100_dt_doc')->default(' - ');
            $table->string('c100_dt_e_s')->default(' - ');
            $table->string('c100_vl_doc')->default(' - ');
            $table->string('c100_ind_pgto')->default(' - ');
            $table->string('c100_vl_desc')->default(' - ');
            $table->string('c100_vl_abat_nt')->default(' - ');
            $table->string('c100_vl_merc')->default(' - ');
            $table->string('c100_ind_frt')->default(' - ');
            $table->string('c100_vl_frt')->default(' - ');
            $table->string('c100_vl_seg')->default(' - ');
            $table->string('c100_vl_out_da')->default(' - ');
            $table->string('c100_vl_bc_icms')->default(' - ');
            $table->string('c100_vl_icms')->default(' - ');
            $table->string('c100_bc_icms_st')->default(' - ');
            $table->string('c100_vl_ipi')->default(' - ');
            $table->string('c100_vl_pis')->default(' - ');
            $table->string('c100_vl_cofins')->default(' - ');
            $table->string('c100_vl_pis_st')->default(' - ');
            $table->string('c100_vl_cofins_st')->default(' - ');

            // C170
            $table->string('c170_reg')->default(' - ');
            $table->string('c170_num_item')->default(' - ');
            $table->string('c170_cod_item')->default(' - ');
            $table->string('c170_descr_compl')->default(' - ');
            $table->string('c170_qtd')->default(' - ');
            $table->string('c170_unid')->default(' - ');
            $table->string('c170_vl_item')->default(' - ');
            $table->string('c170_vl_desc')->default(' - ');
            $table->string('c170_ind_mov')->default(' - ');
            $table->string('c170_cst_icms')->default(' - ');
            $table->string('c170_cfop')->default(' - ');
            $table->string('c170_cod_nat')->default(' - ');
            $table->string('c170_vl_bc_icms')->default(' - ');
            $table->string('c170_aliq_icms')->default(' - ');
            $table->string('c170_vl_icms')->default(' - ');
            $table->string('c170_vl_bc_icms_st')->default(' - ');
            $table->string('c170_aliq_st')->default(' - ');
            $table->string('c170_ind_apur')->default(' - ');
            $table->string('c170_cst_ipi')->default(' - ');
            $table->string('c170_cod_enq')->default(' - ');
            $table->string('c170_vl_bc_ipi')->default(' - ');
            $table->string('c170_aliq_ipi')->default(' - ');
            $table->string('c170_vl_ipi')->default(' - ');
            $table->string('c170_cst_pis')->default(' - ');
            $table->string('c170_vl_bc_pis')->default(' - ');
            $table->string('c170_aliq_pis_percent')->default(' - ');
            $table->string('c170_quant_bc_pis')->default(' - ');
            $table->string('c170_aliq_pis_reais')->default(' - ');
            $table->string('c170_vl_pis')->default(' - ');
            $table->string('c170_cst_cofins')->default(' - ');
            $table->string('c170_vl_bc_cofins')->default(' - ');
            $table->string('c170_aliq_cofins_percent')->default(' - ');
            $table->string('c170_quant_bc_cofins')->default(' - ');
            $table->string('c170_aliq_cofins_reais')->default(' - ');
            $table->string('c170_vl_cofins')->default(' - ');
            $table->string('c170_cod_cta')->default(' - ');

            // c190
            $table->string('c190_reg')->default(' - ');
            $table->string('c190_cst_icms')->default(' - ');
            $table->string('c190_cfop')->default(' - ');
            $table->string('c190_aliq_icms')->default(' - ');
            $table->string('c190_vl_opr')->default(' - ');
            $table->string('c190_vl_bc_icms')->default(' - ');
            $table->string('c190_vl_icms')->default(' - ');
            $table->string('c190_vl_bc_icms_st')->default(' - ');
            $table->string('c190_vl_icms_st')->default(' - ');
            $table->string('c190_vl_red_bc')->default(' - ');
            $table->string('c190_vl_ipi')->default(' - ');
            $table->string('c190_cod_obs')->default(' - ');

            // C195
            $table->string('c195_reg')->default(' - ');
            $table->string('c195_cod_obs')->default(' - ');
            $table->string('c195_txt_compl')->default(' - ');

            // C405
            $table->string('c405_reg')->default(' - ');
            $table->string('c405_dt_doc')->default(' - ');
            $table->string('c405_cro')->default(' - ');
            $table->string('c405_crz')->default(' - ');
            $table->string('c405_num_coo_fin')->default(' - ');
            $table->string('c405_gt_fin')->default(' - ');
            $table->string('c405_vl_brt')->default(' - ');

            // C481
            $table->string('c481_reg')->default(' - ');
            $table->string('c481_cst_pis')->default(' - ');
            $table->string('c481_vl_item')->default(' - ');
            $table->string('c481_vl_bc_pis')->default(' - ');
            $table->string('c481_aliq_pis_quant')->default(' - ');
            $table->string('c481_vl_pis')->default(' - ');
            $table->string('c481_cod_item')->default(' - ');
            $table->string('c481_cod_cta')->default(' - ');

            // C485
            $table->string('c485_reg')->default(' - ');
            $table->string('c485_cst_cofins')->default(' - ');
            $table->string('c485_vl_item')->default(' - ');
            $table->string('c485_vl_bc_cofins')->default(' - ');
            $table->string('c485_aliq_cofins')->default(' - ');
            $table->string('c485_quant_bc_cofins')->default(' - ');
            $table->string('c485_aliq_cofins_quant')->default(' - ');

            // d100
            $table->string('d100_reg')->default(' - ');
            $table->string('d100_ind_oper')->default(' - ');
            $table->string('d100_ind_emit')->default(' - ');
            $table->string('d100_cod_part')->default(' - ');
            $table->string('d100_cod_mod')->default(' - ');
            $table->string('d100_cod_sit')->default(' - ');
            $table->string('d100_ser')->default(' - ');
            $table->string('d100_sub')->default(' - ');
            $table->string('d100_num_doc')->default(' - ');
            $table->string('d100_chv_cte')->default(' - ');
            $table->string('d100_dt_doc')->default(' - ');
            $table->string('d100_dt_a_p')->default(' - ');
            $table->string('d100_tp_ct-e')->default(' - ');
            $table->string('d100_chv_cte_ref')->default(' - ');
            $table->string('d100_vl_doc')->default(' - ');
            $table->string('d100_vl_desc')->default(' - ');
            $table->string('d100_ind_frt')->default(' - ');
            $table->string('d100_vl_serv')->default(' - ');
            $table->string('d100_vl_bc_icms')->default(' - ');
            $table->string('d100_vl_icms')->default(' - ');
            $table->string('d100_vl_nt')->default(' - ');
            $table->string('d100_cod_inf')->default(' - ');
            $table->string('d100_cod_cta ')->default(' - ');

            // [ X ]
            // d190
            $table->string('d190_reg')->default(' - ');
            $table->string('d190_icms')->default(' - ');
            $table->string('d190_cfop')->default(' - ');
            $table->string('d190_aliq_icms')->default(' - ');
            $table->string('d190_vl_opr')->default(' - ');
            $table->string('d190_vl_bc_icms')->default(' - ');
            $table->string('d190_vl_red_bc')->default(' - ');
            $table->string('d190_cod_obs')->default(' - ');

            // [ X ]
            // d400
            $table->string('d400_reg')->default(' - ');
            $table->string('d400_cod_part')->default(' - ');
            $table->string('d400_cod_mod')->default(' - ');
            $table->string('d400_cod_sit')->default(' - ');
            $table->string('d400_ser')->default(' - ');
            $table->string('d400_sub')->default(' - ');
            $table->string('d400_num_doc')->default(' - ');
            $table->string('d400_dt_doc')->default(' - ');
            $table->string('d400_vl_doc')->default(' - ');
            $table->string('d400_vl_desc')->default(' - ');
            $table->string('d400_vl_serv')->default(' - ');
            $table->string('d400_bc_icms')->default(' - ');
            $table->string('d400_vl_icms')->default(' - ');
            $table->string('d400_vl_pis')->default(' - ');
            $table->string('d400_vl_cofins')->default(' - ');
            $table->string('d400_cod_cta')->default(' - ');

            // d500
            $table->string('d500_reg')->default(' - ');
            $table->string('d500_ind_oper')->default(' - ');
            $table->string('d500_ind_emit')->default(' - ');
            $table->string('d500_cod_part')->default(' - ');
            $table->string('d500_cod_mod')->default(' - ');
            $table->string('d500_cod_sit')->default(' - ');
            $table->string('d500_ser')->default(' - ');
            $table->string('d500_sub')->default(' - ');
            $table->string('d500_num_doc')->default(' - ');
            $table->string('d500_dt_doc')->default(' - ');
            $table->string('d500_dt_a_p')->default(' - ');
            $table->string('d500_vl_doc')->default(' - ');
            $table->string('d500_vl_desc')->default(' - ');
            $table->string('d500_vl_serv')->default(' - ');
            $table->string('d500_vl_serv_nt')->default(' - ');
            $table->string('d500_vl_terc')->default(' - ');
            $table->string('d500_vl_da')->default(' - ');
            $table->string('d500_vl_bc_icms')->default(' - ');
            $table->string('d500_vl_icms')->default(' - ');
            $table->string('d500_cod_inf')->default(' - ');
            $table->string('d500_vl_pis')->default(' - ');
            $table->string('d500_vl_cofins')->default(' - ');
            $table->string('d500_cod_cta')->default(' - ');
            $table->string('d500_tp_assinante')->default(' - ');

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
        Schema::dropIfExists('contribuicaos');
    }
}
