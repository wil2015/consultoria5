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
            $table->bigIncrements('id')->unique();
            $table->char('nome', 100);
            $table->char('endereco', 200);
            $table->char('estado',2);
            $table->char('bairro',20);
            $table->char('complemento',20) -> nullable();
            $table->char('localidade',20);
            $table->integer('numero');
            $table->char('telefone', 20);
            $table->date('nascimento');
            $table->char('cep',9);
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
