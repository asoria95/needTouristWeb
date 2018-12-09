<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('persona_rol', function (Blueprint $table) {
          $table->bigInteger('id_persona');
          $table->bigInteger('id_rol');
          $table->primary(['id_persona', 'id_rol']);
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
      Schema::dropIfExists('persona_rol');
    }
}
