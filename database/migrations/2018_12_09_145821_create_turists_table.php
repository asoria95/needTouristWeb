<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turistas', function (Blueprint $table) {
          $table->bigInteger('id_turista');
          $table->string('idioma',30)->nullable();
          $table->string('residencia')->nullable();
          $table->primary('id_turista');
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
        Schema::dropIfExists('turistas');
    }
}
