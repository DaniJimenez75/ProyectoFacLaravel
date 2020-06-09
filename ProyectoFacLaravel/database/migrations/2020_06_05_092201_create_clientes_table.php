<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->primary('idCliente'); 
            $table->bigIncrements('idCliente');
            $table->string('username');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->string('telefono');
            $table->string('ciudad');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('idFactura');
            $table->date('fecha');
            $table->string('descripción');
            $table->double('precio');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('clientes');
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
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('facturas');

    }
}
