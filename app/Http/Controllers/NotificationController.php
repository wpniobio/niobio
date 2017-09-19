<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function index(Request $body){
        $data = DB::table('notificacaos')->select()->get();
        $data = json_decode(json_encode($data), TRUE);

        return json_encode($data);
    }

    public function readedfeed(){
        $data = DB::table('notificacaos')->select()->where('read', 0)->get();
        $data = json_decode(json_encode($data), TRUE);

        return json_encode($data);
    }

    public function delete(Request $id){
        @DB::table('notificacaos')->delete()->where('id', $id->all()['id']);
    }
}
