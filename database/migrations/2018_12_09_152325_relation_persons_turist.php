<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationPersonsTurist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('turistas', function (Blueprint $table) {
        $table->foreign('id_turista')->references('id_persona')->on('personas')
        ->onDelete('cascade')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('turistas', function (Blueprint $table) {
        $table->dropForeign(['id_turista']);
      });
    }
}
