<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSalidadet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidadet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idsalida');
            $table->foreign('idsalida')->references('id')->on('salida')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('idmercaderia');
            $table->foreign('idmercaderia')->references('id')->on('mercaderia')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('cantidad');
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
        Schema::dropIfExists('salidadet');
    }
}
