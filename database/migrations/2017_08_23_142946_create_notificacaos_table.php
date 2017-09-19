<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateNotificacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('to');
            $table->text('message');
            $table->string('read')->default('0');
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
        Schema::dropIfExists('notificacaos');
    }
}
