<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function index(Request $body){

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        $data = DB::table('notificacaos')->select()->get();
        $data = json_decode(json_encode($data), TRUE);

        return json_encode($data);
    }

    public function turnreaded(Request $body){

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        if( DB::update('update notificacaos set read = 1 where id = ?', [$body->all()['id']]) ){
            return http_response_code( 200 ) ;
        }else{
            return http_response_code( 500 ) ;
        }

        
    }

    public function readedfeed(){

        { // Verificação De token
            $token = $body->all()['token'];

            if( count(DB::table('users')->select()->where('token', $token)->get()) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        $data = DB::table('notificacaos')->select()->where('read', 0)->get();
        $data = json_decode(json_encode($data), TRUE);

        return json_encode($data);
    }

    public function delete(Request $id){

        { // Verificação De token
            $token = $body->all()['token'];

            if( count( DB::table('users')->select()->where('token', $token)->get() ) < 1 ){
                return json_encode( ['message' => 'token inválido.'] );
            }
        }

        if( DB::table('notificacaos')->delete()->where('id', $id->all()['id']) ){
            return http_response_code( 200 );
        }else{
            return http_response_code( 500 );
        }
    }
}
