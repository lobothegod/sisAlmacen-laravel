<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCierrealmdet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierrealmdet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idcierrealm');
            $table->foreign('idcierrealm')->references('id')->on('cierrealm')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('idmercaderia');
            $table->foreign('idmercaderia')->references('id')->on('mercaderia')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('stockactual'); //almacenamos el stock registrado en esa fecha
            $table->integer('cantidad'); //almacenamos la cantidad registrada en esa fecha
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cierrealmdet');
    }
}
