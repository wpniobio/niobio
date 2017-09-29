<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivergenciasController extends Controller
{
    public function index(Request $body){
    
        $cnpj = $body->all()['cnpj'];
        $ini = $body->all()['ini'];
        $fin = $body->all()['fin'];

        $dados =  DB::table('divergencias')->select()
                                    ->where('dt_ini', $ini)
                                    ->where('dt_fin', $fin)
                                    ->where('cnpj', $cnpj)
                                    ->get();
        if( count( $dados ) > 0 ){
             return json_encode( $dados );
        }else{
              return json_encode( ['message' => 'Algum dos registros não foi encontrado ( Nota ou Sped ).'] );
        }

    }

    public function store(Request $body){
        $ini = $body->all()['ini'];
        $fin = $body->all()['fin'];
        $infprot_ch = $body->all()['infprot_ch'];
        $json = json_decode($body->all()['divergencia_completa'], TRUE);

        $dados = array_merge(
                [], 
                [
                    'ini' => $ini,
                    'fin' => $fin,
                    'cnpj' => $cnpj,
                    'infprot_ch' => $infprot_ch,
                    'divergencia_completa' => $json
                ]
        );

        if(DB::table('divergencias')->insert($dados)){
            return http_response_code( 200 );
        }else{
            return json_encode( ['message' => 'Inserção de Divergência Falhou.'] );
        }
    }

    public function delete(Request $body){
        $infprot_ch = $body->all()['infprot_ch'];
        if(DB::table('divergencias')->delete()->where('infprot_ch', $infprot_ch)){
            return http_response_code( 200 );
        }else{
            return json_encode( ['message' => 'Remoção de Divergência Falhou.'] );
        }
    }
}
