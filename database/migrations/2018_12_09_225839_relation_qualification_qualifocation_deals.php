<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationQualificationQualifocationDeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('calificacion_negocio', function (Blueprint $table) {
        $table->foreign('id_observacion')->references('id_observacion')->on('calificacion');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('calificacion_negocio', function (Blueprint $table) {
        $table->dropForeign(['id_observacion']);
      });
    }
}
