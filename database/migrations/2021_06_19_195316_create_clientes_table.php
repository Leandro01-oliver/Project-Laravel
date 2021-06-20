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
            $table->integer('id_cliente', true);
            $table->string('nm', 100);
            $table->string('email', 60);
            $table->string('nm_pai', 60);
            $table->string('nm_mae', 60);
            $table->date('dt_nascimento');
            $table->string('telefone', 15);
            $table->string('cpf', 11);
            $table->string('rg', 7);
            $table->string('cep', 10);
            $table->string('rua', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 50);
            $table->string('uf', 50);
            $table->string('rm', 100);
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
    }
}