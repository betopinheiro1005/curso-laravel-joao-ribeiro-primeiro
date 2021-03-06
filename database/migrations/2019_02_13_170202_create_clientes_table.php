<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cidade');
            $table->string('email');
            $table->date('data_nascimento');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
