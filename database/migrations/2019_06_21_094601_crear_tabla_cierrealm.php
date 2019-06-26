<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCierrealm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierrealm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fechaHora');
            $table->unsignedBigInteger('idcomprobante');
            $table->foreign('idcomprobante')->references('id')->on('comprobante')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('conforme');
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
        Schema::dropIfExists('cierrealm');
    }
}
