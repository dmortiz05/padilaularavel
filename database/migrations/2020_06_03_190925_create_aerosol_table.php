<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAerosolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aerosol', function (Blueprint $table) {
            $table->bigIncrements('idaerosol');
            $table->string('nombreaerosol');
            $table->string('descripcionaerosol');
            //$table->string('nombreaerosol');
            $table->integer('cantidadaerosol');
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
        Schema::dropIfExists('aerosol');
    }
}
