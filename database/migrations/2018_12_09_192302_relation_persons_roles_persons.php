<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationPersonsRolesPersons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('persona_rol', function (Blueprint $table) {
        $table->foreign('id_persona')->references('id_persona')->on('personas');
        $table->foreign('id_rol')->references('id_rol')->on('rol');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('persona_rol', function (Blueprint $table) {
        $table->dropForeign(['id_persona']);
        $table->dropForeign(['id_rol']);
      });
    }
}
