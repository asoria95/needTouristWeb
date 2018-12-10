<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationServiceDeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('servicio_negocio', function (Blueprint $table) {
        $table->foreign('id_servicio')->references('id_servicio')->on('servicio');
        $table->foreign('id_negocio')->references('id_negocio')->on('negocio');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('servicio_negocio', function (Blueprint $table) {
        $table->dropForeign(['id_servicio']);
        $table->dropForeign(['id_negocio']);
      });
    }
}
