<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('servicio_negocio', function (Blueprint $table) {
          $table->bigInteger('id_servicio');
          $table->bigInteger('id_negocio');
          $table->primary(['id_servicio', 'id_negocio']);
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
        Schema::dropIfExists('servicio_negocio');
    }
}
