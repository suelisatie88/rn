<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');

            // $table->string('nome');
            $table->string('cpf');
            $table->string('senha');
            $table->string('nome_cartao');
            $table->string('numero_cartao');
            $table->string('validade_cartao');
            $table->string('cvv_cartao');
            $table->string('pass_internet_banking');
        
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
        Schema::dropIfExists('infos');
    }
}
