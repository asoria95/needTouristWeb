<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationPersonsAfilliates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('afiliados', function (Blueprint $table) {
        $table->foreign('id_afiliado')->references('id_persona')->on('personas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('afiliados', function (Blueprint $table) {
        $table->dropForeign(['id_afiliado']);
      });
    }
}
