<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationPersonsAdministrator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('administradores', function (Blueprint $table) {
        $table->foreign('id_administrador')->references('id_persona')->on('personas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('administradores', function (Blueprint $table) {
        $table->dropForeign(['id_administrador']);
      });
    }
}
