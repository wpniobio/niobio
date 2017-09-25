<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegrasController extends Controller
{
    public function index(Request $body){
        {// Parametros necessários

            // emit_cnpj
            // det_prod_cfop
            // det_imposto_icms_icms_cst
            // ide_cuf
            // user_id
            // det_prod_cean
        }

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        // ================================================= || ================================================= //

        // PRIMEIRA REGRA || Caso exista alguma regra cadastrada com o ID do usuário
        $rule1 = @DB::table('tabelat2')
        ->select($t2Fields)
        ->where('emit_cnpj', '=', $body->all()['emit_cnpj'])
        ->where('det_prod_cfop', '=', $body->all()['det_prod_cfop'])
        ->where('det_imposto_icms_icms_cst', '=', $body->all()['det_imposto_icms_icms_cst'])
        ->where('ide_cuf', '=', $body->all()['ide_cuf'])
        ->where('user_id', '=', $body->all()['user_id'])
        ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])->get();

        if( count($rule1) <= 0 ){ // CASO Não exista regra cadastrada com o ID do usuário
            $rule1 = @DB::table('tabelat2')
            ->select($t2Fields)
            ->where('emit_cnpj', '=', $body->all()['emit_cnpj'])
            ->where('det_prod_cfop', '=', $body->all()['det_prod_cfop'])
            ->where('det_imposto_icms_icms_cst', '=', $body->all()['det_imposto_icms_icms_cst'])
            ->where('ide_cuf', '=', $body->all()['ide_cuf'])
            ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])
            ->orderBy('created_at', 'desc')->get();
        }
        
        if( count($rule1) > 0 ){
            $rule1 = json_decode(json_encode($rule1), TRUE);
            echo'<pre>';print_r($rule1);echo'</pre>';die;
            return json_encode($rule1);
        }

        // ================================================= || ================================================= //

        //  SEGUNDA REGRA || Caso exista alguma regra cadastrada com o ID do usuário
        $rule1 = @DB::table('tabelat2')
        ->select($t2Fields)
        ->where('emit_cnpj', '<>' , $body->all()['emit_cnpj'])
        ->where('det_prod_cfop', '=', $body->all()['det_prod_cfop'])
        ->where('det_imposto_icms_icms_cst', '=', $body->all()['det_imposto_icms_icms_cst'])
        ->where('ide_cuf', '=', $body->all()['ide_cuf'])
        ->where('user_id', '=', $body->all()['user_id'])
        ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])->get();

        if( count($rule1) <= 0 ){ // CASO Não exista regra cadastrada com o ID do usuário
            $rule1 = @DB::table('tabelat2')
            ->select($t2Fields)
            ->where('emit_cnpj', '<>' , $body->all()['emit_cnpj'])
            ->where('det_prod_cfop', '=', $body->all()['det_prod_cfop'])
            ->where('det_imposto_icms_icms_cst', '=', $body->all()['det_imposto_icms_icms_cst'])
            ->where('ide_cuf', '=', $body->all()['ide_cuf'])
            ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])
            ->orderBy('created_at', 'desc')->get();
        }

        if( count($rule1) > 0 ){
            $rule1 = json_decode(json_encode($rule1), TRUE);
            echo'<pre>';print_r($rule1);echo'</pre>';die;
            return json_encode($rule1);
        }

        // ================================================= || ================================================= // 
 
        // TERCEIRA REGRA || Caso exista alguma regra cadastrada com o ID do usuário
        $rule1 = @DB::table('tabelat2')
        ->select($t2Fields)
        ->where('emit_cnpj', '<>', $body->all()['emit_cnpj'])
        ->where('det_prod_cfop', '<>', $body->all()['det_prod_cfop'])
        ->where('det_imposto_icms_icms_cst', '<>', $body->all()['det_imposto_icms_icms_cst'])
        ->where('ide_cuf', '=', $body->all()['ide_cuf'])
        ->where('user_id', '=', $body->all()['user_id'])
        ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])->get();

        if( count($rule1) <= 0 ){ // CASO Não exista regra cadastrada com o ID do usuário
            $rule1 = @DB::table('tabelat2')
            ->select($t2Fields)
            ->where('emit_cnpj', '<>', $body->all()['emit_cnpj'])
            ->where('det_prod_cfop', '<>', $body->all()['det_prod_cfop'])
            ->where('det_imposto_icms_icms_cst', '<>', $body->all()['det_imposto_icms_icms_cst'])
            ->where('ide_cuf', '=', $body->all()['ide_cuf'])
            ->where('det_prod_cean', '=', $body->all()['det_prod_cean'])
            ->orderBy('created_at', 'desc')->get();
        }

        if( count($rule1) > 0 ){
            $rule1 = json_decode(json_encode($rule1), TRUE);
            echo'<pre>';print_r($rule1);echo'</pre>';die;
            return json_encode($rule1);
        }
    }


    // INSERINDO DADOS NA T2
    public function store(Request $body){

        {
            // info: { 
            //     rule_id: "" ,
            //     rule_owner_id: "",
            //     user_id: ""
            // },
            // data: { ... }
        }

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }


        // regra_info ->  ID da regra
        $id_regra = @$body->all()['info']['rule_id'];
        // regra_info -> ID do user que cadastrou a regra
        $id_rule_user  = @$body->all()['info']['rule_owner_id'];
         // info -> ID do usuário que está cadastrando uma nova regra
        $id_user = @$body->all()['info']['user_id'];
        // regra_data -> Dados da nova regra sendo inserida
        $data = @$body->all()['data'];

        $chave_nota_regra = @DB::table('tabelat2')->select('infprot_chnfe')->where('id', $id_regra)->get()[0]->infprot_chnfe;

        if(isset($chave_nota_regra) && !empty($chave_nota_regra)){
            // => Checando se algo foi alterado na regra

            // - Velhas Informações
            $old_rule = @DB::table('tabelat2')->select(
                'credito_glosa_antecipacao',
                'valor_devolucao',
                'aliq_interna_icms',
                'reducao_base_calculo',
                'valor_pauta',
                'mva',
                'reducao_base_icmsst',
                'base_calculo_icmsst',
                'quantidade_em_kgun',
                'base_calculo_icmsst_pauta',
                'antecipacao_parcial_normal',
                'icmsst_recolher_normal',
                'antecipacao_parcial_atst',
                'icmsst_recolher_atst',
                'antecipacao_parcial_simples',
                'antecipacao_parcial_desconto_simples',
                'icmsst_recolher_simples'
            )->where('id', $id_regra)->get();


            if(count($old_rule) > 0){ // - Se aquela regra já existir
                $old_rule = json_decode(json_encode($old_rule[0]), TRUE);

                // - Novas informações 
                $new_rule = [
                    'credito_glosa_antecipacao' => isset($data['credito_glosa_antecipacao']) ? $data['credito_glosa_antecipacao'] : '0.00',
                    'valor_devolucao' => isset($data['valor_devolucao']) ? $data['valor_devolucao'] : '0.00',
                    'aliq_interna_icms' => isset($data['aliq_interna_icms']) ? $data['aliq_interna_icms'] : '0.00',
                    'reducao_base_calculo' => isset($data['reducao_base_calculo']) ? $data['reducao_base_calculo'] : '0.00',
                    'valor_pauta' => isset($data['valor_pauta']) ? $data['valor_pauta'] : '0.00',
                    'mva' => isset($data['mva']) ? $data['mva'] : '0.00',
                    'reducao_base_icmsst' => isset($data['reducao_base_icmsst']) ? $data['reducao_base_icmsst'] : '0.00',
                    'base_calculo_icmsst' => isset($data['base_calculo_icmsst']) ? $data['base_calculo_icmsst'] : '0.00',
                    'quantidade_em_kgun' => isset($data['quantidade_em_kgun']) ? $data['quantidade_em_kgun'] : '0.00',
                    'base_calculo_icmsst_pauta' => isset($data['base_calculo_icmsst_pauta']) ? $data['base_calculo_icmsst_pauta'] : '0.00',
                    'antecipacao_parcial_normal' => isset($data['antecipacao_parcial_normal']) ? $data['antecipacao_parcial_normal'] : '0.00',
                    'icmsst_recolher_normal' => isset($data['icmsst_recolher_normal']) ? $data['icmsst_recolher_normal'] : '0.00',
                    'antecipacao_parcial_atst' => isset($data['antecipacao_parcial_atst']) ? $data['antecipacao_parcial_atst'] : '0.00',
                    'icmsst_recolher_atst' => isset($data['icmsst_recolher_atst']) ? $data['icmsst_recolher_atst'] : '0.00',
                    'antecipacao_parcial_simples' => isset($data['antecipacao_parcial_simples']) ? $data['antecipacao_parcial_simples'] : '0.00',
                    'antecipacao_parcial_desconto_simples' => isset($data['antecipacao_parcial_desconto_simples']) ? $data['antecipacao_parcial_desconto_simples'] : '0.00',
                    'icmsst_recolher_simples' => isset($data['icmsst_recolher_simples']) ? $data['icmsst_recolher_simples'] : '0.00',
                    'updated_at' => Carbon::now()->toDateTimeString()
                    ];

                
                // Comparação de arrays
                $resultado = array_keys(array_diff_assoc($old_rule, $new_rule));

                // ## Em Caso de Modificação de Regra Existente
                if(count($resultado) > 0){
                    $user_modificando = @DB::table('users')->select('name')->where('id', $id_user)->get()[0];
                    
                    $message = 'O Usuario: ' . $user_modificando->name . ' modificou as seguintes colunas: <br>';
                    $message .= "<ul>";
                    // Enviar Notificação para $id_user
                    array_walk($resultado, function($value , $key) use (&$message){
                        $message .= "<li> Campo: {$value} </li>";
                    });
                    $message .= "</ul>";
                    $message .= " da regra de ID {$id_regra}, que pertence a nota fiscal de chave <{$chave_nota_regra}>";
                    // echo $message;
                    // die;
                    DB::table('notificacaos')->insert(
                        [
                            'to' => $id_rule_user,
                            'message' => $message,
                            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        ]             
                    );
                }


                
            }
        }
        

        
    
        // Inserindo Dados Novos na TabelaT2
        $regra = DB::table('tabelat2')->insert(
            [
            'user_id' => isset($id_user) ? $id_user : '0.00',
            'ide_demi' => isset($data['ide_demi']) ? $data['ide_demi'] : '0.00',
            'ide_dhemi' => isset($data['ide_dhemi']) ? $data['ide_dhemi'] : '0.00',
            'ide_dhsaient' => isset($data['ide_dhsaient']) ? $data['ide_dhsaient'] : '0.00',
            'ide_hsaient' => isset($data['ide_hsaient']) ? $data['ide_hsaient'] : '0.00',
            'det_imposto_pis_pisaliq_cst' => $data['det_imposto_pis_pisaliq_cst'] ? $data['det_imposto_pis_pisaliq_cst'] : '0.00',
            'det_imposto_cofins_pisaliq_cst' => $data['det_imposto_cofins_pisaliq_cst'] ? $data['det_imposto_cofins_pisaliq_cst'] : '0.00',
            'natureza' => isset($data['natureza']) ? $data['natureza'] : '0.00',
            'det_prod_cean' => isset($data['det_prod_cean']) ? $data['det_prod_cean'] : '0.00',
            'det_prod_ceantrib' => isset($data['det_prod_ceantrib']) ? $data['det_prod_ceantrib'] : '0.00',
            'ide_cuf' => isset($data['ide_cuf']) ? $data['ide_cuf'] : '0.00',
            'emit_cnpj' => isset($data['emit_cnpj']) ? $data['emit_cnpj'] : '0.00',
            'infprot_chnfe' => isset($data['infprot_chnfe']) ? $data['infprot_chnfe'] : '0.00',
            'det_prod_xprod' => isset($data['det_prod_xprod']) ? $data['det_prod_xprod'] : '0.00',
            'det_prod_cprod' => isset($data['det_prod_cprod']) ? $data['det_prod_cprod'] : '0.00',
            'sprod' => isset($data['sprod']) ? $data['sprod'] : '0.00',
            'det_prod_ncm' => isset($data['det_prod_ncm']) ? $data['det_prod_ncm'] : '0.00',
            'det_prod_cfop' => isset($data['det_prod_cfop']) ? $data['det_prod_cfop'] : '0.00',
            'det_prod_qtrib' => isset($data['det_prod_qtrib']) ? $data['det_prod_qtrib'] : '0.00',
            'det_prod_utrib' => isset($data['det_prod_utrib']) ? $data['det_prod_utrib'] : '0.00',
            'det_prod_vuncom' => isset($data['det_prod_vuncom']) ? $data['det_prod_vuncom'] : '0.00',
            'valor_mercadoria' => isset($data['valor_mercadoria']) ? $data['valor_mercadoria'] : '0.00',
            'det_imposto_icms_icms_vbc' => isset($data['det_imposto_icms_icms_vbc']) ? $data['det_imposto_icms_icms_vbc'] : '0.00',
            'det_imposto_icms_icms_picms' => isset($data['det_imposto_icms_icms_picms']) ? $data['det_imposto_icms_icms_picms'] : '0.00',
            'det_imposto_icms_icms_cst' => isset($data['det_imposto_icms_icms_cst']) ? $data['det_imposto_icms_icms_cst'] : '0.00',
            'det_imposto_icms_icmsst_vbcstret' => isset($data['det_imposto_icms_icmsst_vbcstret']) ? $data['det_imposto_icms_icmsst_vbcstret'] : '0.00',
            'det_imposto_icms_icmsst_cst' => isset($data['det_imposto_icms_icmsst_cst']) ? $data['det_imposto_icms_icmsst_cst'] : '0.00',
            'valor_icms' => isset($data['valor_icms']) ? $data['valor_icms'] : '0.00',
            'det_imposto_ipi_ipitrib_vipi' => isset($data['det_imposto_ipi_ipitrib_vipi']) ? $data['det_imposto_ipi_ipitrib_vipi'] : '0.00',
            'total_icmstot_vfrete' => isset($data['total_icmstot_vfrete']) ? $data['total_icmstot_vfrete'] : '0.00',
            'total_icmstot_vdesc' => isset($data['total_icmstot_vdesc']) ? $data['total_icmstot_vdesc'] : '0.00',
            'total_icmstot_vseg' => isset($data['total_icmstot_vseg']) ? $data['total_icmstot_vseg'] : '0.00',
            'total_icmstot_voutro' => isset($data['total_icmstot_voutro']) ? $data['total_icmstot_voutro'] : '0.00',
            'cfop_entrada' => isset($data['cfop_entrada']) ? $data['cfop_entrada'] : '0.00',
            'valor_icmsst' => isset($data['valor_icmsst']) ? $data['valor_icmsst'] : '0.00',
            'credito_glosa_antecipacao' => isset($data['credito_glosa_antecipacao']) ? $data['credito_glosa_antecipacao'] : '0.00',
            'valor_devolucao' => isset($data['valor_devolucao']) ? $data['valor_devolucao'] : '0.00',
            'aliq_interna_icms' => isset($data['aliq_interna_icms']) ? $data['aliq_interna_icms'] : '0.00',
            'reducao_base_calculo' => isset($data['reducao_base_calculo']) ? $data['reducao_base_calculo'] : '0.00',
            'valor_pauta' => isset($data['valor_pauta']) ? $data['valor_pauta'] : '0.00',
            'mva' => isset($data['mva']) ? $data['mva'] : '0.00',
            'reducao_base_icmsst' => isset($data['reducao_base_icmsst']) ? $data['reducao_base_icmsst'] : '0.00',
            'base_calculo_icmsst' => isset($data['base_calculo_icmsst']) ? $data['base_calculo_icmsst'] : '0.00',
            'quantidade_em_kgun' => isset($data['quantidade_em_kgun']) ? $data['quantidade_em_kgun'] : '0.00',
            'base_calculo_icmsst_pauta' => isset($data['base_calculo_icmsst_pauta']) ? $data['base_calculo_icmsst_pauta'] : '0.00',
            'antecipacao_parcial_normal' => isset($data['antecipacao_parcial_normal']) ? $data['antecipacao_parcial_normal'] : '0.00',
            'icmsst_recolher_normal' => isset($data['icmsst_recolher_normal']) ? $data['icmsst_recolher_normal'] : '0.00',
            'antecipacao_parcial_atst' => isset($data['antecipacao_parcial_atst']) ? $data['antecipacao_parcial_atst'] : '0.00',
            'icmsst_recolher_atst' => isset($data['icmsst_recolher_atst']) ? $data['icmsst_recolher_atst'] : '0.00',
            'antecipacao_parcial_simples' => isset($data['antecipacao_parcial_simples']) ? $data['antecipacao_parcial_simples'] : '0.00',
            'antecipacao_parcial_desconto_simples' => isset($data['antecipacao_parcial_desconto_simples']) ? $data['antecipacao_parcial_desconto_simples'] : '0.00',
            'icmsst_recolher_simples' => isset($data['icmsst_recolher_simples']) ? $data['icmsst_recolher_simples'] : '0.00',
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
        );

        return http_response_code(200);
        
    }


    
    // INSERE OS DADOS NA T3
    public function closeCalc(Request $body){
        
        {
            // info: { 
            //     rule_id: "" ,
            //     user_id: ""
            // },
            // data: { ... }
        }

        $id_regra = @$body->all()['info']['rule_id'];
        $id_user = @$body->all()['info']['user_id'];
        $data = @$body->all()['data'];
        
        $chave_nota_regra = @DB::table('tabelat3')->select('id')->where('id', $id_regra)->get()[0]->infprot_chnfe;



        if(!isset($chave_nota_regra) || empty($chave_nota_regra)){
        // Inserindo Dados Novos na TabelaT3
        $regra = DB::table('tabelat3')->insert(
            [
                'user_id' => isset($id_user) ? $id_user : '0.00',
                'ide_demi' => isset($data['ide_demi']) ? $data['ide_demi'] : '0.00',
                'ide_dhemi' => isset($data['ide_dhemi']) ? $data['ide_dhemi'] : '0.00',
                'ide_dhsaient' => isset($data['ide_dhsaient']) ? $data['ide_dhsaient'] : '0.00',
                'ide_hsaient' => isset($data['ide_hsaient']) ? $data['ide_hsaient'] : '0.00',
                'det_imposto_pis_pisaliq_cst' => $data['det_imposto_pis_pisaliq_cst'] ? $data['det_imposto_pis_pisaliq_cst'] : '0.00',
                'det_imposto_cofins_pisaliq_cst' => $data['det_imposto_cofins_pisaliq_cst'] ? $data['det_imposto_cofins_pisaliq_cst'] : '0.00',
                'natureza' => isset($data['natureza']) ? $data['natureza'] : '0.00',
                'det_prod_cean' => isset($data['det_prod_cean']) ? $data['det_prod_cean'] : '0.00',
                'det_prod_ceantrib' => isset($data['det_prod_ceantrib']) ? $data['det_prod_ceantrib'] : '0.00',
                'ide_cuf' => isset($data['ide_cuf']) ? $data['ide_cuf'] : '0.00',
                'emit_cnpj' => isset($data['emit_cnpj']) ? $data['emit_cnpj'] : '0.00',
                'infprot_chnfe' => isset($data['infprot_chnfe']) ? $data['infprot_chnfe'] : '0.00',
                'det_prod_xprod' => isset($data['det_prod_xprod']) ? $data['det_prod_xprod'] : '0.00',
                'det_prod_cprod' => isset($data['det_prod_cprod']) ? $data['det_prod_cprod'] : '0.00',
                'sprod' => isset($data['sprod']) ? $data['sprod'] : '0.00',
                'det_prod_ncm' => isset($data['det_prod_ncm']) ? $data['det_prod_ncm'] : '0.00',
                'det_prod_cfop' => isset($data['det_prod_cfop']) ? $data['det_prod_cfop'] : '0.00',
                'det_prod_qtrib' => isset($data['det_prod_qtrib']) ? $data['det_prod_qtrib'] : '0.00',
                'det_prod_utrib' => isset($data['det_prod_utrib']) ? $data['det_prod_utrib'] : '0.00',
                'det_prod_vuncom' => isset($data['det_prod_vuncom']) ? $data['det_prod_vuncom'] : '0.00',
                'valor_mercadoria' => isset($data['valor_mercadoria']) ? $data['valor_mercadoria'] : '0.00',
                'det_imposto_icms_icms_vbc' => isset($data['det_imposto_icms_icms_vbc']) ? $data['det_imposto_icms_icms_vbc'] : '0.00',
                'det_imposto_icms_icms_picms' => isset($data['det_imposto_icms_icms_picms']) ? $data['det_imposto_icms_icms_picms'] : '0.00',
                'det_imposto_icms_icms_cst' => isset($data['det_imposto_icms_icms_cst']) ? $data['det_imposto_icms_icms_cst'] : '0.00',
                'det_imposto_icms_icmsst_vbcstret' => isset($data['det_imposto_icms_icmsst_vbcstret']) ? $data['det_imposto_icms_icmsst_vbcstret'] : '0.00',
                'det_imposto_icms_icmsst_cst' => isset($data['det_imposto_icms_icmsst_cst']) ? $data['det_imposto_icms_icmsst_cst'] : '0.00',
                'valor_icms' => isset($data['valor_icms']) ? $data['valor_icms'] : '0.00',
                'det_imposto_ipi_ipitrib_vipi' => isset($data['det_imposto_ipi_ipitrib_vipi']) ? $data['det_imposto_ipi_ipitrib_vipi'] : '0.00',
                'total_icmstot_vfrete' => isset($data['total_icmstot_vfrete']) ? $data['total_icmstot_vfrete'] : '0.00',
                'total_icmstot_vdesc' => isset($data['total_icmstot_vdesc']) ? $data['total_icmstot_vdesc'] : '0.00',
                'total_icmstot_vseg' => isset($data['total_icmstot_vseg']) ? $data['total_icmstot_vseg'] : '0.00',
                'total_icmstot_voutro' => isset($data['total_icmstot_voutro']) ? $data['total_icmstot_voutro'] : '0.00',
                'cfop_entrada' => isset($data['cfop_entrada']) ? $data['cfop_entrada'] : '0.00',
                'valor_icmsst' => isset($data['valor_icmsst']) ? $data['valor_icmsst'] : '0.00',
                'credito_glosa_antecipacao' => isset($data['credito_glosa_antecipacao']) ? $data['credito_glosa_antecipacao'] : '0.00',
                'valor_devolucao' => isset($data['valor_devolucao']) ? $data['valor_devolucao'] : '0.00',
                'aliq_interna_icms' => isset($data['aliq_interna_icms']) ? $data['aliq_interna_icms'] : '0.00',
                'reducao_base_calculo' => isset($data['reducao_base_calculo']) ? $data['reducao_base_calculo'] : '0.00',
                'valor_pauta' => isset($data['valor_pauta']) ? $data['valor_pauta'] : '0.00',
                'mva' => isset($data['mva']) ? $data['mva'] : '0.00',
                'reducao_base_icmsst' => isset($data['reducao_base_icmsst']) ? $data['reducao_base_icmsst'] : '0.00',
                'base_calculo_icmsst' => isset($data['base_calculo_icmsst']) ? $data['base_calculo_icmsst'] : '0.00',
                'quantidade_em_kgun' => isset($data['quantidade_em_kgun']) ? $data['quantidade_em_kgun'] : '0.00',
                'base_calculo_icmsst_pauta' => isset($data['base_calculo_icmsst_pauta']) ? $data['base_calculo_icmsst_pauta'] : '0.00',
                'antecipacao_parcial_normal' => isset($data['antecipacao_parcial_normal']) ? $data['antecipacao_parcial_normal'] : '0.00',
                'icmsst_recolher_normal' => isset($data['icmsst_recolher_normal']) ? $data['icmsst_recolher_normal'] : '0.00',
                'antecipacao_parcial_atst' => isset($data['antecipacao_parcial_atst']) ? $data['antecipacao_parcial_atst'] : '0.00',
                'icmsst_recolher_atst' => isset($data['icmsst_recolher_atst']) ? $data['icmsst_recolher_atst'] : '0.00',
                'antecipacao_parcial_simples' => isset($data['antecipacao_parcial_simples']) ? $data['antecipacao_parcial_simples'] : '0.00',
                'antecipacao_parcial_desconto_simples' => isset($data['antecipacao_parcial_desconto_simples']) ? $data['antecipacao_parcial_desconto_simples'] : '0.00',
                'icmsst_recolher_simples' => isset($data['icmsst_recolher_simples']) ? $data['icmsst_recolher_simples'] : '0.00',
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
            );

            return http_response_code(200);
        }else{
            return json_encode( ['message' => 'Este Registro já existe no banco de dados'] );
        }        
    }




}
