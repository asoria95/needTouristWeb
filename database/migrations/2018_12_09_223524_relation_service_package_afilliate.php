<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationServicePackageAfilliate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('servicio', function (Blueprint $table) {
        $table->foreign('id_afiliado')->references('id_afiliado')->on('afiliados');
        $table->foreign('id_paquete')->references('id_paquete')->on('paquete_turistico');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('servicio', function (Blueprint $table) {
        $table->dropForeign(['id_afiliado']);
        $table->dropForeign(['id_paquete']);
      });
    }
}
