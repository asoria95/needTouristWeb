<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('paquete_turistico', function (Blueprint $table) {
          $table->increments('id_paquete');
          $table->text('descripcion');
          $table->string('itinerario',70);
          $table->decimal('price', 6, 2);
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
          Schema::dropIfExists('paquete_turistico');
    }
}
