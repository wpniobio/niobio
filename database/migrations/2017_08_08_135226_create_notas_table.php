<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('infprot_chnfe');
            $table->string('emit_cnpj');
            // attributes
            $table->string('attributes_id');
            $table->string('attributes_versao')->default('0.00');
            // a - infnfe
            //$table->string('infnfe_versao')->default('0.00');
            //$table->string('infnfe_id')->default('0.00');
            $table->string('infnfe_pknitem')->default('0.00');
            $table->string('infnfe_infnfe')->default('0.00');
            // b - ide
            $table->string('ide_cuf')->default('0.00');
            $table->string('ide_cnf')->default('0.00');
            $table->string('ide_natop')->default('0.00');
            $table->string('ide_indpag')->default('0.00');
            $table->string('ide_mod')->default('0.00');
            $table->string('ide_serie')->default('0.00');
            $table->string('ide_nnf')->default('0.00');
            $table->string('ide_demi')->default('0.00');
            // nota 3.1'0.00'
            $table->string('ide_dhemi')->default('0.00');
            $table->string('ide_dhsaient')->default('0.00');

            $table->string('ide_dsaient')->default('0.00');
            $table->string('ide_hsaient')->default('0.00');
            

            $table->string('ide_tpnf')->default('0.00');
            // nota 3.1'0.00'
            $table->string('ide_iddest')->default('0.00');

            $table->string('ide_cmunfg')->default('0.00');

            // nota 3.1'0.00'
            $table->string('ide_tpimp')->default('0.00');

            //  nfref
                $table->string('ide_nfref_refnfe')->default('0.00');
            //  refnf
                $table->string('ide_refnf_cuf')->default('0.00');
                $table->string('ide_refnf_aamm')->default('0.00');
                $table->string('ide_refnf_cnpj')->default('0.00');
                $table->string('ide_refnf_mod')->default('0.00');
                $table->string('ide_refnf_serie')->default('0.00');
                $table->string('ide_refnf_nnf')->default('0.00'); // revisar
            //  refnfp
                $table->string('ide_refnfp_cuf')->default('0.00');
                $table->string('ide_refnfp_aamm')->default('0.00');
                $table->string('ide_refnfp_cnpj')->default('0.00');
                $table->string('ide_refnfp_cpf')->default('0.00');
                $table->string('ide_refnfp_ie')->default('0.00');
                $table->string('ide_refnfp_mod')->default('0.00');
                $table->string('ide_refnfp_serie')->default('0.00');
            //          nnf
                        $table->string('ide_refnfp_nnf_refcte')->default('0.00');
                        $table->string('ide_refnfp_nnf_refecf')->default('0.00');
                        $table->string('ide_refnfp_nnf_mod')->default('0.00');
                        $table->string('ide_refnfp_nnf_necf')->default('0.00');
                        $table->string('ide_refnfp_nnf_ncoo')->default('0.00');
            //
            $table->string('ide_tplmp')->default('0.00');
            $table->string('ide_tpemis')->default('0.00');
            $table->string('ide_cdv')->default('0.00');
            $table->string('ide_tpamb')->default('0.00');
            $table->string('ide_finnfe')->default('0.00');
            // nota 3.1'0.00'
            $table->string('ide_indfinal')->default('0.00');
            $table->string('ide_indpres')->default('0.00');

            $table->string('ide_procemi')->default('0.00');
            $table->string('ide_verproc')->default('0.00');
            $table->string('ide_dhcont')->default('0.00');
            $table->string('ide_xjust')->default('0.00');

        /* TABELA EMITENTES
           
            
        */

        /* TABELA DE DESTINATARIOS
           

        */    
        
        /* TABELA DESTINATARIO
            
            */
            // h - det
            // i - prod
            $table->integer('det_attributes_nitem')->default(0);
            $table->string('det_prod_cprod')->default('0.00');
            $table->string('det_prod_cean')->default('0.00');
            $table->string('det_prod_xprod')->default('0.00');
            $table->string('det_prod_ncm')->default('0.00');
            $table->string('det_prod_cest')->default('0.00');
            $table->string('det_prod_extipi')->default('0.00');
            $table->string('det_prod_cfop')->default('0.00');
            $table->string('det_prod_ucom')->default('0.00');
            $table->string('det_prod_qcom')->default('0.00');
            $table->string('det_prod_vuncom')->default('0.00');
            $table->string('det_prod_vprod')->default('0.00');
            $table->string('det_prod_ceantrib')->default('0.00');
            $table->string('det_prod_utrib')->default('0.00');
            $table->string('det_prod_qtrib')->default('0.00');
            $table->string('det_prod_vuntrib')->default('0.00');
            $table->string('det_prod_vfrete')->default('0.00');
            $table->string('det_prod_vseg')->default('0.00');
            $table->string('det_prod_vdesc')->default('0.00');
            $table->string('det_prod_voutro')->default('0.00');
            $table->string('det_prod_indtot')->default('0.00');
            

            // j - veicprod
            $table->string('det_prod_veicprod_tpop')->default('0.00');
            $table->string('det_prod_veicprod_chassi')->default('0.00');
            $table->string('det_prod_veicprod_ccor')->default('0.00');
            $table->string('det_prod_veicprod_xcor')->default('0.00');
            $table->string('det_prod_veicprod_pot')->default('0.00');
            $table->string('det_prod_veicprod_cilin')->default('0.00');
            $table->string('det_prod_veicprod_pesol')->default('0.00');
            $table->string('det_prod_veicprod_pesob')->default('0.00');
            $table->string('det_prod_veicprod_nserie')->default('0.00');
            $table->string('det_prod_veicprod_tpcomb')->default('0.00');
            $table->string('det_prod_veicprod_nmotor')->default('0.00');
            $table->string('det_prod_veicprod_cmt')->default('0.00');
            $table->string('det_prod_veicprod_dist')->default('0.00');
            $table->string('det_prod_veicprod_anomod')->default('0.00');
            $table->string('det_prod_veicprod_anofab')->default('0.00');
            $table->string('det_prod_veicprod_tppint')->default('0.00');
            $table->string('det_prod_veicprod_tpveic')->default('0.00');
            $table->string('det_prod_veicprod_espveic')->default('0.00');
            $table->string('det_prod_veicprod_vin')->default('0.00');
            $table->string('det_prod_veicprod_condveic')->default('0.00');
            $table->string('det_prod_veicprod_cmod')->default('0.00');
            $table->string('det_prod_veicprod_ccorden')->default('0.00');
            $table->string('det_prod_veicprod_lota')->default('0.00');
            $table->string('det_prod_veicprod_tprest')->default('0.00');
            // k - med
            $table->string('det_prod_med_nlote')->default('0.00');
            $table->string('det_prod_med_qlote')->default('0.00');
            $table->string('det_prod_med_dfab')->default('0.00');
            $table->string('det_prod_med_dval')->default('0.00');
            $table->string('det_prod_med_vpmc')->default('0.00');
            //      comb
                    $table->string('det_prod_med_comb_cprodanp')->default('0.00');
                    $table->string('det_prod_med_comb_codif')->default('0.00');
                    $table->string('det_prod_med_comb_qtemp')->default('0.00');
                    $table->string('det_prod_med_comb_ufcons')->default('0.00');
            //              cide        
                            $table->string('det_prod_med_comb_cide_qbcprod')->default('0.00');
                            $table->string('det_prod_med_comb_cide_valiqprod')->default('0.00');
                            $table->string('det_prod_med_comb_cide_vcide')->default('0.00');
            

            // m-n imposto
                // {icms}
                // [ modalidade normal ]
                $table->string('det_imposto_vtottrib')->default('0.00');
                // icms'0.00'
                $table->string('det_imposto_icms_icms_orig')->default('0.00');
                $table->string('det_imposto_icms_icms_cst')->default('0.00');
                $table->string('det_imposto_icms_icms_modbc')->default('0.00');
                $table->string('det_imposto_icms_icms_vbc')->default('0.00');
                $table->string('det_imposto_icms_icms_picms')->default('0.00');
                $table->string('det_imposto_icms_icms_vicms')->default('0.00');
                //icms1'0.00'
                $table->string('det_imposto_icms_icms_modbcst')->default('0.00');
                $table->string('det_imposto_icms_icms_pmvast')->default('0.00');
                $table->string('det_imposto_icms_icms_predbcst')->default('0.00');
                $table->string('det_imposto_icms_icms_vbcst')->default('0.00');
                $table->string('det_imposto_icms_icms_picmsst')->default('0.00');
                $table->string('det_imposto_icms_icms_vicmsst')->default('0.00');  // <<<<<<<<<<<<<<<<<<<<<<<<<<,
                // icms2'0.00'
                $table->string('det_imposto_icms_icms_predbc')->default('0.00');
                // icms3'0.00'
                // icms4'0.00'
                $table->string('det_imposto_icms_icms_motdesicms')->default('0.00');
                // icms51
                // icms6'0.00'
                $table->string('det_imposto_icms_icms_vbcstret')->default('0.00');
                $table->string('det_imposto_icms_icms_vicmsstret')->default('0.00');
                // icms7'0.00'
                // icms9'0.00'

                // [ icmspart ]
                $table->string('det_imposto_icms_icmspart_orig')->default('0.00');
                $table->string('det_imposto_icms_icmspart_cst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_modbc')->default('0.00');
                $table->string('det_imposto_icms_icmspart_vbc')->default('0.00');
                $table->string('det_imposto_icms_icmspart_predbc')->default('0.00');
                $table->string('det_imposto_icms_icmspart_picms')->default('0.00');
                $table->string('det_imposto_icms_icmspart_vicms')->default('0.00');
                $table->string('det_imposto_icms_icmspart_modbcst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_pmvast')->default('0.00');
                $table->string('det_imposto_icms_icmspart_predbcst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_vbcst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_picmsst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_vicmsst')->default('0.00');
                $table->string('det_imposto_icms_icmspart_pbcop')->default('0.00');
                $table->string('det_imposto_icms_icmspart_ufst')->default('0.00');
                // [ icms st]
                $table->string('det_imposto_icms_icmsst_orig')->default('0.00');
                $table->string('det_imposto_icms_icmsst_cst')->default('0.00');
                $table->string('det_imposto_icms_icmsst_vbcstret')->default('0.00');
                $table->string('det_imposto_icms_icmsst_vicmsstret')->default('0.00');
                $table->string('det_imposto_icms_icmsst_vicmsstdest')->default('0.00');
                // [ icms sn ]
                $table->string('det_imposto_icms_icmssn_orig')->default('0.00');
                $table->string('det_imposto_icms_icmssn_csosn')->default('0.00');
                $table->string('det_imposto_icms_icmssn_pcredsn')->default('0.00');
                $table->string('det_imposto_icms_icmssn_vcredicmssn')->default('0.00');
                // [ icmssn 1'0.00'2 ]
                // [ icmssn 2'0.00'1]
                $table->string('det_imposto_icms_icmssn_modbcst')->default('0.00');
                $table->string('det_imposto_icms_icmssn_pmvast')->default('0.00');
                $table->string('det_imposto_icms_icmssn_predbcst')->default('0.00');
                $table->string('det_imposto_icms_icmssn_vbcst')->default('0.00');
                $table->string('det_imposto_icms_icmssn_picmsst')->default('0.00');
                // [ icmssn 2'0.00'2 ]
                $table->string('det_imposto_icms_icmssn_vicmsst')->default('0.00');
                // [ icmssn 5'0.00' ] 
                $table->string('det_imposto_icms_icmssn_vicmsstret')->default('0.00');
                // [ icmssn 9'0.00' ]
                $table->string('det_imposto_icms_icmssn_vbc')->default('0.00');
                $table->string('det_imposto_icms_icmssn_predbc')->default('0.00');
                $table->string('det_imposto_icms_icmssn_picms')->default('0.00');
                $table->string('det_imposto_icms_icmssn_vicms')->default('0.00');
                $table->string('det_imposto_icms_icmssn_vbcstret')->default('0.00');
                
                // o - ipi
                $table->string('det_imposto_ipi_cienq')->default('0.00');
                $table->string('det_imposto_ipi_cnpjprod')->default('0.00');
                $table->string('det_imposto_ipi_cselo')->default('0.00');
                $table->string('det_imposto_ipi_qselo')->default('0.00');
                $table->string('det_imposto_ipi_cenq')->default('0.00');
                //      ipitrib
                        $table->string('det_imposto_ipi_ipitrib_cst')->default('0.00');
                        $table->string('det_imposto_ipi_ipitrib_vbc')->default('0.00');
                        $table->string('det_imposto_ipi_ipitrib_qunid')->default('0.00');
                        $table->string('det_imposto_ipi_ipitrib_vunid')->default('0.00');
                        $table->string('det_imposto_ipi_ipitrib_pipi')->default('0.00');
                        $table->string('det_imposto_ipi_ipitrib_vipi')->default('0.00');
                //      ipint
                $table->string('det_imposto_ipi_ipint_cst')->default('0.00');
                
                // q -pis
                //      pisaliq 
                        $table->string('det_imposto_pis_pisaliq_cst')->default('0.00');
                        $table->string('det_imposto_pis_pisaliq_vbc')->default('0.00');
                        $table->string('det_imposto_pis_pisaliq_ppis')->default('0.00');
                        $table->string('det_imposto_pis_pisaliq_vpis')->default('0.00');
                //      pisqtde
                        $table->string('det_imposto_pis_pisqtde_cst')->default('0.00'); // revisar
                        $table->string('det_imposto_pis_pisqtde_qbcprod')->default('0.00');
                        $table->string('det_imposto_pis_pisqtde_valiqprod')->default('0.00');
                        $table->string('det_imposto_pis_pisqtde_vpis')->default('0.00');
                //      pisnt 
                        $table->string('det_imposto_pis_pisnt_cst')->default('0.00'); // revisar
                //      pisoutr
                        $table->string('det_imposto_pis_pisoutr_cst')->default('0.00');
                        $table->string('det_imposto_pis_pisoutr_vbc')->default('0.00');
                        $table->string('det_imposto_pis_pisoutr_ppis')->default('0.00');
                        $table->string('det_imposto_pis_pisoutr_qbcprod')->default('0.00');
                        $table->string('det_imposto_pis_pisoutr_valiqprod')->default('0.00');
                        $table->string('det_imposto_pis_pisoutr_vpis')->default('0.00');
                //      pisst
                        $table->string('det_imposto_pis_pisst_vbc')->default('0.00');
                        $table->string('det_imposto_pis_pisst_ppis')->default('0.00');
                        $table->string('det_imposto_pis_pisst_qbcprod')->default('0.00');
                        $table->string('det_imposto_pis_pisst_valiqprod')->default('0.00');
                        $table->string('det_imposto_pis_pisst_vpis')->default('0.00');
                // cofins
                //      cofinsaliq
                        $table->string('det_imposto_cofins_cofinsaliq_cst')->default('0.00');                
                        $table->string('det_imposto_cofins_cofinsaliq_vbc')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsaliq_pcofins')->default('0.00');
                //      cofinsqtde
                        $table->string('det_imposto_cofins_cofinsqtde_cst')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsqtde_qbcprod')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsqtde_vcofins')->default('0.00');
                //      cofinsnt
                        $table->string('det_imposto_cofins_cofinsnt_cst')->default('0.00');
                //      cofinsoutr
                        $table->string('det_imposto_cofins_cofinsoutr_cst')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsoutr_vbc')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsoutr_pcofins')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsoutr_qbcprod')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsoutr_vcofins')->default('0.00');
                // t - cofins st
                //      cofinssnt
                        $table->string('det_imposto_cofins_cofinsst_vbc')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsst_pcofins')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsst_qbcprod')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsst_valiqprod')->default('0.00');
                        $table->string('det_imposto_cofins_cofinsst_vcofins')->default('0.00');
                
                // v - infadprod
                $table->string('det_imposto_cofins_issqn_infadprod')->default('0.00'); // revisar
                // w - total
                //      icmstot
                        $table->string('total_icmstot_vbc')->default('0.00');
                        $table->string('total_icmstot_vicms')->default('0.00');
                        $table->string('total_icmstot_vbcst')->default('0.00');
                        $table->string('total_icmstot_vst')->default('0.00');
                        $table->string('total_icmstot_vprod')->default('0.00');
                        $table->string('total_icmstot_vfrete')->default('0.00');
                        $table->string('total_icmstot_vdesc')->default('0.00');
                        $table->string('total_icmstot_vseg')->default('0.00');
                        $table->string('total_icmstot_vii')->default('0.00');
                        $table->string('total_icmstot_vipi')->default('0.00');
                        $table->string('total_icmstot_vpis')->default('0.00');
                        $table->string('total_icmstot_vcofins')->default('0.00');
                        $table->string('total_icmstot_voutro')->default('0.00');
                        $table->string('total_icmstot_vnf')->default('0.00');
                //      issqntot
                        $table->string('issqntot_vserv')->default('0.00');
                        $table->string('issqntot_vbc')->default('0.00');
                        $table->string('issqntot_viss')->default('0.00');
                        $table->string('issqntot_vpis')->default('0.00');
                        $table->string('issqntot_vcofins')->default('0.00');
                //      rettrib
                        $table->string('issqntot_retrib_vretpis')->default('0.00');
                        $table->string('issqntot_retrib_vretcofins')->default('0.00');
                        $table->string('issqntot_retrib_vretcsll')->default('0.00');
                        $table->string('issqntot_retrib_virrf')->default('0.00');
                        $table->string('issqntot_retrib_vbcretprev')->default('0.00');
                        $table->string('issqntot_retrib_vretprev')->default('0.00');

                // z - infadic
                //      infadic
                        $table->text('infadic_infadfisco')->default('0.00');
                        $table->text('infadic_infcpl')->default('0.00');
                //      obscont
                        $table->text('infadic_obscont_xcampo')->default('0.00');
                        $table->text('infadic_obscont_xtexto')->default('0.00');
                //      procref
                        $table->text('infadic_procref_nproc')->default('0.00');
                        $table->text('infadic_procref_indproc')->default('0.00');
                // za - exporta
                        $table->text('infadic_exporta_ufembarq')->default('0.00');
                        $table->text('infadic_exporta_xlocembarq')->default('0.00');
                //      compra
                        $table->string('infadic_compra_xnemp')->default('0.00');
                        $table->string('infadic_compra_xped')->default('0.00');
                        $table->string('infadic_compra_xcont')->default('0.00');
                // zc - cana
                        $table->string('infadic_cana_safra')->default('0.00');
                        $table->string('infadic_cana_ref')->default('0.00');
                //      fordia
                        $table->string('infadic_cana_dia')->default('0.00');
                        $table->string('infadic_cana_qtde')->default('0.00');
                        $table->string('infadic_cana_qtotmes')->default('0.00');
                        $table->string('infadic_cana_qtotant')->default('0.00');
                        $table->string('infadic_cana_qtotger')->default('0.00');
                //      deduc
                        $table->string('infadic_cana_xded')->default('0.00');
                        $table->string('infadic_cana_vded')->default('0.00');
                        $table->string('infadic_cana_vfor')->default('0.00');
                        $table->string('infadic_cana_vtotded')->default('0.00');
                        $table->string('infadic_cana_vliqfor')->default('0.00');
                        
                // ZZ - Signature

                // JSON
                $table->json('nota_completa');
                
                // FInal

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
        Schema::dropIfExists('notas');
    }
}
