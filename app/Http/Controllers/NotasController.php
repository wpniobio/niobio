<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nota;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasController extends Controller
{
    public function index(Request $body){

        print_r( $body->all() );
        $cnpj = $body->all()['cnpj'];
        $dt_ini = $body->all()['dt_ini'];
        $dt_fin = $body->all()['dt_fin'];

        $notasFields = [
            'id',
            'ide_cuf',
            'infprot_chnfe',
            'emit_cnpj',
            'ide_demi',
            'ide_dhemi',
            'det_prod_xprod',
            'det_prod_cprod',
            'det_prod_ncm',
            'det_prod_cfop',
            'det_prod_qtrib',
            'det_prod_utrib',
            'det_prod_vuncom',
            'det_imposto_icms_icms_vbc',
            'det_prod_cean',
            'det_imposto_icms_icms_picms',
            'det_imposto_icms_icms_cst',
            'det_imposto_icms_icmsst_cst',
            'det_imposto_vtottrib',
            'det_imposto_ipi_ipitrib_vipi',
            'total_icmstot_vfrete',
            'total_icmstot_vseg',
            'total_icmstot_vdesc',
            'total_icmstot_voutro'
        ];

        // Campos complementares da Tabela 2.
        // $t2Fields = [
        //     'id',
        //     'user_id',
        //     'ide_demi',
        //     'ide_dhemi',
        //     'credito_glosa_antecipacao',
        //     'valor_devolucao',
        //     'aliq_interna_icms',
        //     'reducao_base_calculo',
        //     'valor_pauta',
        //     'mva',
        //     'reducao_base_icmsst',
        //     'base_calculo_icmsst',
        //     'quantidade_em_kgun',
        //     'base_calculo_icmsst_pauta',
        //     'antecipacao_parcial_normal',
        //     'icmsst_recolher_normal',
        //     'antecipacao_parcial_atst',
        //     'icmsst_recolher_atst',
        //     'antecipacao_parcial_simples',
        //     'antecipacao_parcial_desconto_simples',
        //     'icmsst_recolher_simples'
        // ];

        // Verificação de existência e nivel de acesso do usuario
        //if( isset($resp) && !empty($resp) && $resp->role >= 0 && isset($token) ){

            // CONSULTANDO NOTAS
            $notas = DB::table('notas')
                        ->select($notasFields)
                        ->where('emit_cnpj', '=' ,$cnpj)
                        ->where('ide_dhemi', '>=', $dt_ini)
                        ->where('ide_dhemi', '<=', $dt_fin)
                        ->orWhere('ide_demi', '>=', $dt_ini)
                        ->where('ide_demi', '<=', $dt_fin)
                        ->get();
        

        // Buscando Informações de outras tabelas
        // para dar merge nas informações retornadas pra tabela do usuário
        foreach($notas as $nota):
            // Pegando Nome e IE do emitente da 
            $emit = DB::table('emitentes')->select()->where('infprot_chnfe', $nota->infprot_chnfe)->get();
            if( count($emit) > 0 ){
                $nota->emit_xnome = $emit[0]->emit_xnome;
                $nota->emit_ie = $emit[0]->emit_ie;
            }else{
                $nota->emit_xnome = 'none';
                $nota->emit_ie = 'none';
            }
        endforeach;



            $notas = json_decode(json_encode($notas), TRUE);
            echo'<pre>';print_r($notas);echo'</pre>';die;
            return json_encode($notas);
        // }else{
        //     return http_response_code(403);
        // }
    }

    public function closedCalc(Request $body){

        print_r( $body->all() );
        $cnpj = $body->all()['cnpj'];
        $dt_ini = $body->all()['dt_ini'];
        $dt_fin = $body->all()['dt_fin'];

        $notasFields = [
            'id',
            'ide_cuf',
            'infprot_chnfe',
            'emit_cnpj',
            'ide_demi',
            'ide_dhemi',
            'det_prod_xprod',
            'det_prod_cprod',
            'det_prod_ncm',
            'det_prod_cfop',
            'det_prod_qtrib',
            'det_prod_utrib',
            'det_prod_vuncom',
            'det_imposto_icms_icms_vbc',
            'det_prod_cean',
            'det_imposto_icms_icms_picms',
            'det_imposto_icms_icms_cst',
            'det_imposto_icms_icmsst_cst',
            'det_imposto_vtottrib',
            'det_imposto_ipi_ipitrib_vipi',
            'total_icmstot_vfrete',
            'total_icmstot_vseg',
            'total_icmstot_vdesc',
            'total_icmstot_voutro'
        ];



            // CONSULTANDO NOTAS
            $notas = DB::table('tabelat3s')
                        ->select($notasFields)
                        ->where('emit_cnpj', '=' ,$cnpj)
                        ->where('ide_dhemi', '>=', $dt_ini)
                        ->where('ide_dhemi', '<=', $dt_fin)
                        ->orWhere('ide_demi', '>=', $dt_ini)
                        ->where('ide_demi', '<=', $dt_fin)
                        ->get();

            $notas = json_decode(json_encode($notas), TRUE);
            echo'<pre>';print_r($notas);echo'</pre>';die;
            return json_encode($notas);
    }

}
