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
            
            // attributes
            $table->string('attributes_id');
            $table->string('attributes_versao')->default(0);
            // a - infnfe
            //$table->string('infnfe_versao')->default(0);
            //$table->string('infnfe_id')->default(0);
            $table->string('infnfe_pknitem')->default(0);
            $table->string('infnfe_infnfe')->default(0);
            // b - ide
            $table->string('ide_cuf')->default(0);
            $table->string('ide_cnf')->default(0);
            $table->string('ide_natop')->default(0);
            $table->string('ide_indpag')->default(0);
            $table->string('ide_mod')->default(0);
            $table->string('ide_serie')->default(0);
            $table->string('ide_nnf')->default(0);
            $table->string('ide_demi')->default(0);
            // nota 3.10
            $table->string('ide_dhemi')->default(0);
            $table->string('ide_dhsaient')->default(0);

            $table->string('ide_dsaient')->default(0);
            $table->string('ide_hsaient')->default(0);
            

            $table->string('ide_tpnf')->default(0);
            // nota 3.10
            $table->string('ide_iddest')->default(0);

            $table->string('ide_cmunfg')->default(0);

            // nota 3.10
            $table->string('ide_tpimp')->default(0);

            //  nfref
                $table->string('ide_nfref_refnfe')->default(0);
            //  refnf
                $table->string('ide_refnf_cuf')->default(0);
                $table->string('ide_refnf_aamm')->default(0);
                $table->string('ide_refnf_cnpj')->default(0);
                $table->string('ide_refnf_mod')->default(0);
                $table->string('ide_refnf_serie')->default(0);
                $table->string('ide_refnf_nnf')->default(0); // revisar
            //  refnfp
                $table->string('ide_refnfp_cuf')->default(0);
                $table->string('ide_refnfp_aamm')->default(0);
                $table->string('ide_refnfp_cnpj')->default(0);
                $table->string('ide_refnfp_cpf')->default(0);
                $table->string('ide_refnfp_ie')->default(0);
                $table->string('ide_refnfp_mod')->default(0);
                $table->string('ide_refnfp_serie')->default(0);
            //          nnf
                        $table->string('ide_refnfp_nnf_refcte')->default(0);
                        $table->string('ide_refnfp_nnf_refecf')->default(0);
                        $table->string('ide_refnfp_nnf_mod')->default(0);
                        $table->string('ide_refnfp_nnf_necf')->default(0);
                        $table->string('ide_refnfp_nnf_ncoo')->default(0);
            //
            $table->string('ide_tplmp')->default(0);
            $table->string('ide_tpemis')->default(0);
            $table->string('ide_cdv')->default(0);
            $table->string('ide_tpamb')->default(0);
            $table->string('ide_finnfe')->default(0);
            // nota 3.10
            $table->string('ide_indfinal')->default(0);
            $table->string('ide_indpres')->default(0);

            $table->string('ide_procemi')->default(0);
            $table->string('ide_verproc')->default(0);
            $table->string('ide_dhcont')->default(0);
            $table->string('ide_xjust')->default(0);

        /* TABELA EMITENTES
           
            
        */

        /* TABELA DE DESTINATARIOS
           

        */    
        
        /* TABELA DESTINATARIO
            
            */
            // h - det
            //$table->json('det_prod')->default(0);//=================================================================
            // i - prod
            $table->integer('det_attributes_nitem')->default(0);
            $table->string('det_prod_cprod')->default(0);
            $table->string('det_prod_cean')->default(0);
            $table->string('det_prod_xprod')->default(0);
            $table->string('det_prod_ncm')->default(0);
            $table->string('det_prod_extipi')->default(0);
            $table->string('det_prod_cfop')->default(0);
            $table->string('det_prod_ucom')->default(0);
            $table->string('det_prod_qcom')->default(0);
            $table->string('det_prod_vuncom')->default(0);
            $table->string('det_prod_vprod')->default(0);
            $table->string('det_prod_ceantrib')->default(0);
            $table->string('det_prod_utrib')->default(0);
            $table->string('det_prod_qtrib')->default(0);
            $table->string('det_prod_vuntrib')->default(0);
            $table->string('det_prod_vfrete')->default(0);
            $table->string('det_prod_vseg')->default(0);
            $table->string('det_prod_vdesc')->default(0);
            $table->string('det_prod_voutro')->default(0);
            $table->string('det_prod_indtot')->default(0);
            /*
            //      di
                    $table->string('det_prod_di_ndi')->default(0);
                    $table->string('det_prod_di_ddi')->default(0);
                    $table->string('det_prod_di_xlocdesemb')->default(0);
                    $table->string('det_prod_di_ddesemb')->default(0);
                    $table->string('det_prod_di_cexportador')->default(0);
            //          adi
                        $table->string('det_prod_di_adi_nadicao')->default(0); // revisar
                        $table->string('det_prod_di_adi_nseqadic')->default(0);
                        $table->string('det_prod_di_adi_cfabricante')->default(0);
                        $table->string('det_prod_di_adi_vdescdi')->default(0);
                        $table->string('det_prod_di_adi_xped')->default(0);
                        $table->string('det_prod_di_adi_nitemped')->default(0);
                        */

            // j - veicprod
            $table->string('det_prod_veicprod_tpop')->default(0);
            $table->string('det_prod_veicprod_chassi')->default(0);
            $table->string('det_prod_veicprod_ccor')->default(0);
            $table->string('det_prod_veicprod_xcor')->default(0);
            $table->string('det_prod_veicprod_pot')->default(0);
            $table->string('det_prod_veicprod_cilin')->default(0);
            $table->string('det_prod_veicprod_pesol')->default(0);
            $table->string('det_prod_veicprod_pesob')->default(0);
            $table->string('det_prod_veicprod_nserie')->default(0);
            $table->string('det_prod_veicprod_tpcomb')->default(0);
            $table->string('det_prod_veicprod_nmotor')->default(0);
            $table->string('det_prod_veicprod_cmt')->default(0);
            $table->string('det_prod_veicprod_dist')->default(0);
            $table->string('det_prod_veicprod_anomod')->default(0);
            $table->string('det_prod_veicprod_anofab')->default(0);
            $table->string('det_prod_veicprod_tppint')->default(0);
            $table->string('det_prod_veicprod_tpveic')->default(0);
            $table->string('det_prod_veicprod_espveic')->default(0);
            $table->string('det_prod_veicprod_vin')->default(0);
            $table->string('det_prod_veicprod_condveic')->default(0);
            $table->string('det_prod_veicprod_cmod')->default(0);
            $table->string('det_prod_veicprod_ccorden')->default(0);
            $table->string('det_prod_veicprod_lota')->default(0);
            $table->string('det_prod_veicprod_tprest')->default(0);
            // k - med
            $table->string('det_prod_med_nlote')->default(0);
            $table->string('det_prod_med_qlote')->default(0);
            $table->string('det_prod_med_dfab')->default(0);
            $table->string('det_prod_med_dval')->default(0);
            $table->string('det_prod_med_vpmc')->default(0);
            //      comb
                    $table->string('det_prod_med_comb_cprodanp')->default(0);
                    $table->string('det_prod_med_comb_codif')->default(0);
                    $table->string('det_prod_med_comb_qtemp')->default(0);
                    $table->string('det_prod_med_comb_ufcons')->default(0);
            //              cide        
                            $table->string('det_prod_med_comb_cide_qbcprod')->default(0);
                            $table->string('det_prod_med_comb_cide_valiqprod')->default(0);
                            $table->string('det_prod_med_comb_cide_vcide')->default(0);
            

            // m-n imposto
            //$table->json('imposto_icms')->default(0);
                // {icms}
                // [ modalidade normal ]
                $table->string('det_imposto_vtottrib')->default(0);
                // icms00
                $table->string('det_imposto_icms_icms_orig')->default(0);
                $table->string('det_imposto_icms_icms_cst')->default(0);
                $table->string('det_imposto_icms_icms_modbc')->default(0);
                $table->string('det_imposto_icms_icms_vbc')->default(0);
                $table->string('det_imposto_icms_icms_picms')->default(0);
                $table->string('det_imposto_icms_icms_vicms')->default(0);
                //icms10
                $table->string('det_imposto_icms_icms_modbcst')->default(0);
                $table->string('det_imposto_icms_icms_pmvast')->default(0);
                $table->string('det_imposto_icms_icms_predbcst')->default(0);
                $table->string('det_imposto_icms_icms_vbcst')->default(0);
                $table->string('det_imposto_icms_icms_picmsst')->default(0);
                $table->string('det_imposto_icms_icms_vicmsst')->default(0);
                // icms20
                $table->string('det_imposto_icms_icms_predbc')->default(0);
                // icms30
                // icms40
                $table->string('det_imposto_icms_icms_motdesicms')->default(0);
                // icms51
                // icms60
                $table->string('det_imposto_icms_icms_vbcstret')->default(0);
                $table->string('det_imposto_icms_icms_vicmsstret')->default(0);
                // icms70
                // icms90

                // [ icmspart ]
                $table->string('det_imposto_icms_icmspart_orig')->default(0);
                $table->string('det_imposto_icms_icmspart_cst')->default(0);
                $table->string('det_imposto_icms_icmspart_modbc')->default(0);
                $table->string('det_imposto_icms_icmspart_vbc')->default(0);
                $table->string('det_imposto_icms_icmspart_predbc')->default(0);
                $table->string('det_imposto_icms_icmspart_picms')->default(0);
                $table->string('det_imposto_icms_icmspart_vicms')->default(0);
                $table->string('det_imposto_icms_icmspart_modbcst')->default(0);
                $table->string('det_imposto_icms_icmspart_pmvast')->default(0);
                $table->string('det_imposto_icms_icmspart_predbcst')->default(0);
                $table->string('det_imposto_icms_icmspart_vbcst')->default(0);
                $table->string('det_imposto_icms_icmspart_picmsst')->default(0);
                $table->string('det_imposto_icms_icmspart_vicmsst')->default(0);
                $table->string('det_imposto_icms_icmspart_pbcop')->default(0);
                $table->string('det_imposto_icms_icmspart_ufst')->default(0);
                // [ icms st]
                $table->string('det_imposto_icms_icmsst_orig')->default(0);
                $table->string('det_imposto_icms_icmsst_cst')->default(0);
                $table->string('det_imposto_icms_icmsst_vbcstret')->default(0);
                $table->string('det_imposto_icms_icmsst_vicmsstret')->default(0);
                $table->string('det_imposto_icms_icmsst_vicmsstdest')->default(0);
                // [ icms sn ]
                $table->string('det_imposto_icms_icmssn_orig')->default(0);
                $table->string('det_imposto_icms_icmssn_csosn')->default(0);
                $table->string('det_imposto_icms_icmssn_pcredsn')->default(0);
                $table->string('det_imposto_icms_icmssn_vcredicmssn')->default(0);
                // [ icmssn 102 ]
                // [ icmssn 201]
                $table->string('det_imposto_icms_icmssn_modbcst')->default(0);
                $table->string('det_imposto_icms_icmssn_pmvast')->default(0);
                $table->string('det_imposto_icms_icmssn_predbcst')->default(0);
                $table->string('det_imposto_icms_icmssn_vbcst')->default(0);
                $table->string('det_imposto_icms_icmssn_picmsst')->default(0);
                // [ icmssn 202 ]
                $table->string('det_imposto_icms_icmssn_vicmsst')->default(0);
                // [ icmssn 500 ] 
                $table->string('det_imposto_icms_icmssn_vicmsstret')->default(0);
                // [ icmssn 900 ]
                $table->string('det_imposto_icms_icmssn_vbc')->default(0);
                $table->string('det_imposto_icms_icmssn_predbc')->default(0);
                $table->string('det_imposto_icms_icmssn_picms')->default(0);
                $table->string('det_imposto_icms_icmssn_vicms')->default(0);
                $table->string('det_imposto_icms_icmssn_vbcstret')->default(0);
                
                // o - ipi
                $table->string('det_imposto_ipi_cienq')->default(0);
                $table->string('det_imposto_ipi_cnpjprod')->default(0);
                $table->string('det_imposto_ipi_cselo')->default(0);
                $table->string('det_imposto_ipi_qselo')->default(0);
                $table->string('det_imposto_ipi_cenq')->default(0);
                //      ipitrib
                        $table->string('det_imposto_ipi_ipitrib_cst')->default(0);
                        $table->string('det_imposto_ipi_ipitrib_vbc')->default(0);
                        $table->string('det_imposto_ipi_ipitrib_qunid')->default(0);
                        $table->string('det_imposto_ipi_ipitrib_vunid')->default(0);
                        $table->string('det_imposto_ipi_ipitrib_pipi')->default(0);
                        $table->string('det_imposto_ipi_ipitrib_vipi')->default(0);
                //      ipint
                $table->string('det_imposto_ipi_ipint_cst')->default(0);
                /*
                // p - ii
                $table->string('det_imposto_ii_vbc')->default(0);
                $table->string('det_imposto_ii_vdespadu')->default(0);
                $table->string('det_imposto_ii_vii')->default(0);
                $table->string('det_imposto_ii_viof')->default(0);
                */
                // q -pis
                //      pisaliq 
                        $table->string('det_imposto_pis_pisaliq_cst')->default(0);
                        $table->string('det_imposto_pis_pisaliq_vbc')->default(0);
                        $table->string('det_imposto_pis_pisaliq_ppis')->default(0);
                        $table->string('det_imposto_pis_pisaliq_vpis')->default(0);
                //      pisqtde
                        $table->string('det_imposto_pis_pisqtde_cst')->default(0); // revisar
                        $table->string('det_imposto_pis_pisqtde_qbcprod')->default(0);
                        $table->string('det_imposto_pis_pisqtde_valiqprod')->default(0);
                        $table->string('det_imposto_pis_pisqtde_vpis')->default(0);
                //      pisnt 
                        $table->string('det_imposto_pis_pisnt_cst')->default(0); // revisar
                //      pisoutr
                        $table->string('det_imposto_pis_pisoutr_cst')->default(0);
                        $table->string('det_imposto_pis_pisoutr_vbc')->default(0);
                        $table->string('det_imposto_pis_pisoutr_ppis')->default(0);
                        $table->string('det_imposto_pis_pisoutr_qbcprod')->default(0);
                        $table->string('det_imposto_pis_pisoutr_valiqprod')->default(0);
                        $table->string('det_imposto_pis_pisoutr_vpis')->default(0);
                //      pisst
                        $table->string('det_imposto_pis_pisst_vbc')->default(0);
                        $table->string('det_imposto_pis_pisst_ppis')->default(0);
                        $table->string('det_imposto_pis_pisst_qbcprod')->default(0);
                        $table->string('det_imposto_pis_pisst_valiqprod')->default(0);
                        $table->string('det_imposto_pis_pisst_vpis')->default(0);
                // cofins
                //      cofinsaliq
                        $table->string('det_imposto_cofins_cofinsaliq_cst')->default(0);                
                        $table->string('det_imposto_cofins_cofinsaliq_vbc')->default(0);
                        $table->string('det_imposto_cofins_cofinsaliq_pcofins')->default(0);
                //      cofinsqtde
                        $table->string('det_imposto_cofins_cofinsqtde_cst')->default(0);
                        $table->string('det_imposto_cofins_cofinsqtde_qbcprod')->default(0);
                        $table->string('det_imposto_cofins_cofinsqtde_vcofins')->default(0);
                //      cofinsnt
                        $table->string('det_imposto_cofins_cofinsnt_cst')->default(0);
                //      cofinsoutr
                        $table->string('det_imposto_cofins_cofinsoutr_cst')->default(0);
                        $table->string('det_imposto_cofins_cofinsoutr_vbc')->default(0);
                        $table->string('det_imposto_cofins_cofinsoutr_pcofins')->default(0);
                        $table->string('det_imposto_cofins_cofinsoutr_qbcprod')->default(0);
                        $table->string('det_imposto_cofins_cofinsoutr_vcofins')->default(0);
                // t - cofins st
                //      cofinssnt
                        $table->string('det_imposto_cofins_cofinsst_vbc')->default(0);
                        $table->string('det_imposto_cofins_cofinsst_pcofins')->default(0);
                        $table->string('det_imposto_cofins_cofinsst_qbcprod')->default(0);
                        $table->string('det_imposto_cofins_cofinsst_valiqprod')->default(0);
                        $table->string('det_imposto_cofins_cofinsst_vcofins')->default(0);
                /*
                // issqn
                $table->string('det_imposto_issqn_vbc')->default(0);
                $table->string('det_imposto_issqn_valiq')->default(0);
                $table->string('det_imposto_issqn_vissqn')->default(0);
                $table->string('det_imposto_issqn_cmunfg')->default(0);
                $table->string('det_imposto_issqn_clistserv')->default(0);
                $table->string('det_imposto_issqn_csittrib')->default(0);
                */
                // v - infadprod
                $table->string('det_imposto_cofins_issqn_infadprod')->default(0); // revisar
                // w - total
                //      icmstot
                        $table->string('total_icmstot_vbc')->default(0);
                        $table->string('total_icmstot_vicms')->default(0);
                        $table->string('total_icmstot_vbcst')->default(0);
                        $table->string('total_icmstot_vst')->default(0);
                        $table->string('total_icmstot_vprod')->default(0);
                        $table->string('total_icmstot_vfrete')->default(0);
                        $table->string('total_icmstot_vseg')->default(0);
                        $table->string('total_icmstot_vii')->default(0);
                        $table->string('total_icmstot_vipi')->default(0);
                        $table->string('total_icmstot_vpis')->default(0);
                        $table->string('total_icmstot_vcofins')->default(0);
                        $table->string('total_icmstot_voutro')->default(0);
                        $table->string('total_icmstot_vnf')->default(0);
                //      issqntot
                        $table->string('issqntot_vserv')->default(0);
                        $table->string('issqntot_vbc')->default(0);
                        $table->string('issqntot_viss')->default(0);
                        $table->string('issqntot_vpis')->default(0);
                        $table->string('issqntot_vcofins')->default(0);
                //      rettrib
                        $table->string('issqntot_retrib_vretpis')->default(0);
                        $table->string('issqntot_retrib_vretcofins')->default(0);
                        $table->string('issqntot_retrib_vretcsll')->default(0);
                        $table->string('issqntot_retrib_virrf')->default(0);
                        $table->string('issqntot_retrib_vbcretprev')->default(0);
                        $table->string('issqntot_retrib_vretprev')->default(0);
                // x - tranp
                //$table->json('transp')->default(0); //=================================================================
                

                /* RETIRADO
                //      trasp
                        $table->string('transp_modfrete')->default(0);
                //      transporta
                        $table->string('transp_trasporta_cnpj')->default(0);
                        $table->string('transp_trasporta_cpf')->default(0);
                        $table->string('transp_trasporta_xnome')->default(0);
                        $table->string('transp_trasporta_ie')->default(0);
                        $table->string('transp_trasporta_xender')->default(0);
                        $table->string('transp_trasporta_xmun')->default(0);
                        $table->string('transp_trasporta_uf')->default(0);
                //      rettransp
                        $table->string('transp_rettransp_vserv')->default(0);
                        $table->string('transp_rettransp_vbcret')->default(0);
                        $table->string('transp_rettransp_vicmsret')->default(0);
                        $table->string('transp_rettransp_cfop')->default(0);
                        $table->string('transp_rettransp_cmunfg')->default(0);
                //      veictransp
                        $table->string('transp_veictransp_placa')->default(0);
                        $table->string('transp_veictransp_uf')->default(0);
                        $table->string('transp_veictransp_rntc')->default(0);
                //      reboque
                        $table->string('transp_reboque_placa')->default(0);
                        $table->string('transp_reboque_uf')->default(0);
                        $table->string('transp_reboque_rntc')->default(0);
                        $table->string('transp_reboque_vagao')->default(0);
                        $table->string('transp_reboque_balsa')->default(0);
                //      vol
                        $table->string('transp_vol_qvol')->default(0);
                        $table->string('transp_vol_esp')->default(0);
                        $table->string('transp_vol_marca')->default(0);
                        $table->string('transp_vol_nvol')->default(0);
                        $table->string('transp_vol_pesol')->default(0);
                        $table->string('transp_vol_pesob')->default(0);
                        $table->string('transp_vol_lacres')->default(0);
                        $table->string('transp_vol_nlacre')->default(0);
                */

                // y - cobr
                //        $table->json('cobr')->default(0);//=================================================================
                        /*
                //      fat
                        $table->string('cobr_fat_nfat')->default(0); // revisa
                        $table->string('cobr_fat_vorig')->default(0);
                        $table->string('cobr_fat_vdesc')->default(0);
                        $table->string('cobr_fat_vliq')->default(0);
                //      dup
                        $table->string('cobr_dup_ndup')->default(0);
                        $table->string('cobr_dup_dvenc')->default(0);
                        $table->string('cobr_dup_vdup')->default(0);
                        */

                // z - infadic
                //      infadic
                        $table->text('infadic_infadfisco')->default(0);
                        $table->text('infadic_infcpl')->default(0);
                //      obscont
                        $table->text('infadic_obscont_xcampo')->default(0);
                        $table->text('infadic_obscont_xtexto')->default(0);
                //      procref
                        $table->text('infadic_procref_nproc')->default(0);
                        $table->text('infadic_procref_indproc')->default(0);
                // za - exporta
                        $table->text('infadic_exporta_ufembarq')->default(0);
                        $table->text('infadic_exporta_xlocembarq')->default(0);
                //      compra
                        $table->string('infadic_compra_xnemp')->default(0);
                        $table->string('infadic_compra_xped')->default(0);
                        $table->string('infadic_compra_xcont')->default(0);
                // zc - cana
                        $table->string('infadic_cana_safra')->default(0);
                        $table->string('infadic_cana_ref')->default(0);
                //      fordia
                        $table->string('infadic_cana_dia')->default(0);
                        $table->string('infadic_cana_qtde')->default(0);
                        $table->string('infadic_cana_qtotmes')->default(0);
                        $table->string('infadic_cana_qtotant')->default(0);
                        $table->string('infadic_cana_qtotger')->default(0);
                //      deduc
                        $table->string('infadic_cana_xded')->default(0);
                        $table->string('infadic_cana_vded')->default(0);
                        $table->string('infadic_cana_vfor')->default(0);
                        $table->string('infadic_cana_vtotded')->default(0);
                        $table->string('infadic_cana_vliqfor')->default(0);
                        
                // ZZ - Signature

                // JSON
                $table->json('nota_completa');
                
                // FInal

                

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
        Schema::dropIfExists('notas');
    }
}
