<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationServiceTurist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('servicio_turista', function (Blueprint $table) {
        $table->foreign('id_servicio')->references('id_servicio')->on('servicio');
        $table->foreign('id_turista')->references('id_turista')->on('turistas');
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
      Schema::table('servicio_turista', function (Blueprint $table) {
        $table->dropForeign(['id_servicio']);
        $table->dropForeign(['id_turista']);
        $table->dropForeign(['id_observacion']);
      });
    }
}
