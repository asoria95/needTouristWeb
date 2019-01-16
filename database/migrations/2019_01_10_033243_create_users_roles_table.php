<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
   {
     Schema::create('users_rol', function (Blueprint $table) {
         $table->bigInteger('id_usuario');
         $table->bigInteger('id_rol');
         $table->primary(['id_usuario', 'id_rol']);
         //$table->rememberToken();
         $table->timestamps();
     });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
     Schema::dropIfExists('users_rol');
   }
}
