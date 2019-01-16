<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationUsersRoleRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::table('users_rol', function (Blueprint $table) {
         $table->foreign('id_usuario')->references('id')->on('users')
         ->onDelete('cascade')->onUpdate('cascade');
         $table->foreign('id_rol')->references('id_rol')->on('rol')
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
       Schema::table('users_rol', function (Blueprint $table) {
         $table->dropForeign(['id_usuario']);
         $table->dropForeign(['id_rol']);
       });
     }
}
