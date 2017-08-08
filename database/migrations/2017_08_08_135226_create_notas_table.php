<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            // Produto
            $table->string('prod_cProd', 60);
            $table->string('prod_cEAN', 14);
            $table->string('prod_xProd ', 120);
            $table->string('prod_NCM', 8);
            $table->string('prod_EXTIPI', 3);
            $table->string('prod_CFOP', 4);
            $table->string('prod_uCom', 6);
            $table->string('prod_qCom', 15);
            $table->string('prod_vUnCom', 21);
            $table->string('prod_vProd', 15);
            $table->string('prod_cEANTrib', 14);
            $table->string('prod_uTrib', 6);
            $table->string('prod_qTrib', 15);
            $table->string('prod_vUnTrib', 21);
            $table->string('prod_vFrete', 15);
            $table->string('prod_vSeg', 15);
            $table->string('prod_vDesc', 15);
            $table->string('prod_vOutro', 15);
            $table->string('prod_indTot', 1);
            $table->string('prod_nLote', 20);
            $table->string('prod_qLote', 11);
            $table->string('prod_dFab', 20);

            // 
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
        Schema::dropIfExists('notas');
    }
}
