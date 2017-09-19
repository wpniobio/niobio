<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    /*
    
        "SELECT id, token, role
        FROM users
        WHERE name = {$user}
        AND password = {$pass}"

    */
    public function auth(Request $body){
        $user = $body->username;
        $pass = $body->password;
        $query = DB::table('users')
        ->select('id', 'token', 'role')
        ->where('name', $user)
        ->where('password', $pass)->get();

        $usuario = $query[0];

        if(isset($usuario) && !empty($usuario)){
            return json_encode(
            [
                'id' => $usuario->id,
                'token' => $usuario->token,
                'role' => $usuario->role,
                'status' => 'ok'
            ]);
        }else{
            return json_encode([
                'status' => 0
            ]);
        }
        
    }

    public function adduser(Request $body){
        $token = md5($body->username . $body->password);
        try{
            $userID = DB::table('users')->insertGetId(
                [
                    'name' => $body->username,
                    'email' => $body->email,
                    'password' => $body->password,
                    'role' => 0,//isset($body->role) ? $body->role : 0,
                    'token' => $token,
                    'updated_at' => Carbon::now()->toDateTimeString()
                ]
            );

            return json_encode(['id' =>  $userID,'token' => $token, 'status' => 1]);
        }catch(PDOEXCEPTION $e){
            return json_encode(['message'=> $e->getMessage(), 'status' => 0]);
        }
    }
}
