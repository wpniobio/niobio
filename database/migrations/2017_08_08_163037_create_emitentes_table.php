<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmitentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('infprot_chnfe');
            // 3.10
            $table->string('emit_ie')->default(0);
            $table->string('emit_crt')->default(0);
            $table->string('emit_cnpj')->default(0);
            $table->string('emit_cpf')->default(0);
            $table->string('emit_xnome')->default(0);
            $table->string('emit_xfant')->default(0);
            $table->string('emit_enderemit_xlgr')->default(0);
            $table->string('emit_enderemit_nro')->default(0);
            $table->string('emit_enderemit_xcpl')->default(0);
            $table->string('emit_enderemit_xbairro')->default(0);
            $table->string('emit_enderemit_cmun')->default(0);
            $table->string('emit_enderemit_xmun')->default(0);
            $table->string('emit_enderemit_uf')->default(0);
            $table->string('emit_enderemit_cep')->default(0);
            $table->string('emit_enderemit_cpais')->default(0);
            $table->string('emit_enderemit_xpais')->default(0);
            $table->string('emit_enderemit_fone')->default(0);
            $table->string('emit_enderemit_cdv')->default(0);
            $table->string('emit_enderemit_ie')->default(0);
            $table->string('emit_enderemit_iest')->default(0);
            $table->string('emit_enderemit_im')->default(0);
            $table->string('emit_enderemit_cnae')->default(0);
            $table->string('emit_enderemit_crt')->default(0);

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
        Schema::dropIfExists('emitentes');
    }
}
