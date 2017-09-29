<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divergencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dt_ini')->default('-');
            $table->string('dt_fin')->default('-');
            //$table->string('cnpj')->default('-');
            $table->string('infprot_ch')->default('-');
            $table->json('divergencia_completa')->default('-');
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
        Schema::dropIfExists('divergencias');
    }
}
