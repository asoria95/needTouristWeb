<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationAfilliateReferenceContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('contacto_referencia', function (Blueprint $table) {
        $table->foreign('id_afiliado')->references('id_afiliado')->on('afiliados');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('contacto_referencia', function (Blueprint $table) {
        $table->dropForeign(['id_afiliado']);
      });
    }
}
