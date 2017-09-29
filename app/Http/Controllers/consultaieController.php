<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class consultaieController extends Controller
{
        public function checkInscricao(Request $body){
            $url = 'http://www.sefaz.ba.gov.br/scripts/antc/result_consulta.asp';
            $fields = ['num_inscricao' => $body->all()['cnpj']];
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "num_inscricao={$num}");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
            
            $return = curl_exec($ch);


            curl_close($ch);

            return json_encode(['status' => $this->resolveHtml($return)]);
            
        }

        public function resolveHtml($html){
            $docHtml = new DOMDocument();
            @$docHtml->loadHtml($html);

            $tds = $docHtml->getElementsByTagName( 'td' );

            $fields = [];

            $exp = ["/\s+/","/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/", "/(ç)/", "/(Ç)/"];
            $replace = [' ','a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'n', 'N', 'c', 'C'];

            foreach ($tds as $td) {
                if(!empty($td->nodeValue) && isset($td->nodeValue)){
                    
                    if( count(explode(':', $td->nodeValue)) > 1){

                        $array = explode(':', $td->nodeValue);
                        
                        $array[0] = strtolower(preg_replace($exp, $replace, $array[0]));//str_replace(' ', '-',trim($array[0]));
                        $array[1] = preg_replace($exp, $replace, $array[1]);
                        $fields["{$array['0']}"] = $array[1];
                    }else{
                        continue;
                    }
                }

            }

            $motivo = '';

            foreach ($fields as $field => $value) {
                if($field == 'motivo'){
                    $motivo = trim($value);
                }
            }

            if(preg_match('/[Descredenciado]/',$motivo)){
                return 'Descredenciado';
            }else{
                return 'Credenciado';
            }

            return $motivo;
        }
}
