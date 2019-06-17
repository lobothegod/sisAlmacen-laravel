<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEntradadet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradadet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('identrada');
            $table->foreign('identrada', 'fk_entradadet_entrada')->references('id')->on('entrada')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('idmercaderia');
            $table->foreign('idmercaderia', 'fk_entradadet_mercaderia')->references('id')->on('mercaderia')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('cantidad');
            $table->date('fechaVen')->nullable();
            $table->string('nroLote')->nullable();
            $table->string('ubicacion')->nullable();
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
        Schema::dropIfExists('entradadet');
    }
}
