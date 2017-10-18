<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id_usuario');
          $table->string('nome_display', 100);
          $table->string('nome_completo', 255);
          $table->string('usuario', 100)->unique();
          $table->string('email', 150);
          $table->string('funcao', 150);
          $table->string('senha', 200);
          $table->string('status', 50)->default('Inativo');
          $table->rememberToken();
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
