<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contacto_referencia', function (Blueprint $table) {
          $table->bigInteger('id_afiliado');
          $table->string('nombre',70);
          $table->string('telefono',10);
          $table->primary('id_afiliado');
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
        Schema::dropIfExists('contacto_referencia');
    }
}
