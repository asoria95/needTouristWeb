<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTuristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('servicio_turista', function (Blueprint $table) {
        $table->bigInteger('id_servicio');
        $table->bigInteger('id_turista');
        $table->date('fecha');
        $table->bigInteger('id_observacion')->nullable();
        $table->integer('cantidad');
        $table->primary(['id_servicio', 'id_turista','fecha']);
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
        Schema::dropIfExists('servicio_turista');
    }
}
