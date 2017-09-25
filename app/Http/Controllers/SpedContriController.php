<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpedContriController extends Controller
{
    public function contribuicao(Request $body){
        $cnpj = $body->all()['cnpj'];
        $ini = $body->all()['ini'];
        $fin = $body->all()['fin'];
        $type = $body->all()['type'];

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        $types = ['c481', 'c485', 'c170', 'a170'];

        if( isset( $type ) && !is_null( $type ) && !empty( $type ) && in_array( $type, $types ) ){

            switch( $type ){
                case 'c481':
                    $type = 'c481_vl_item';
                    break;
                case 'c485':
                    $type = 'c485_vl_item';
                    break;
                case 'c170':
                    $type = 'c170_num_item';
                    break;
                case 'a170':
                    $type = 'a170_num_item';
                    break;
                
                default:
                    $type = null;
            }

            if( !is_null($type) ){
                $dados =  DB::table('contribuicaos')
                ->select()
                ->where('zero0000_cnpj', $cnpj)
                ->where('zero0000_dt_ini', $ini)
                ->where('zero0000_dt_fin', $fin)
                ->where($type, '<>', ' - ')
                ->get();
            }else{
                $dados =  DB::table('contribuicaos')
                ->select()
                ->where('zero0000_cnpj', $cnpj)
                ->where('zero0000_dt_ini', $ini)
                ->where('zero0000_dt_fin', $fin)
                ->get();
            }
            
            $dados = json_decode(json_encode($dados), TRUE);
            return json_encode($dados);

        }else{
            return json_encode(['message' => "<b> Nenhum resultado encontrado, ou algum parâmetro foi enviado de forma incorreta. </b>"]);
        }        
    }


    public function fiscal(Request $body){
        $cnpj = $body->all()['cnpj'];
        $ini = $body->all()['ini'];
        $fin = $body->all()['fin'];

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        foreach( $body->all() as $param ){

            if( empty($param) || is_null($param) ){
                return json_encode(['message' => "<b> Nenhum resultado encontrado, ou algum parâmetro foi enviado de forma incorreta. </b>"]);
            }
            
        }

        $dados =  DB::table('speds')->select()
                                    ->where('zero0000_cnpj', $cnpj)
                                    ->where('zero0000_dt_ini', $ini)
                                    ->where('zero0000_dt_fin', $fin)
                                    ->get();

        if( isset( $dados ) && !is_null( $dados ) && !empty( $dados )){
            $dados = json_decode(json_encode($dados), TRUE);
            return json_encode($dados);
        }else{
            return json_encode(['message' => "<b> Nenhum resultado encontrado, ou algum parâmetro foi enviado de forma incorreta. </b>"]);
        }  
    }
}
