<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cursos', function (Blueprint $table) {
          $table->increments('id_curso');
          $table->integer('cod');
          $table->string('area', 255);
          $table->string('nome', 255);
          $table->string('sigla', 255);
          $table->string('horas_semanais', 255);
          $table->string('duracao', 255);
          $table->string('carga_horaria', 255);
          $table->decimal('valor_total', 10, 2);
          $table->decimal('desconto_maximo', 5, 2);
          $table->integer('parcela_maxima');
          $table->integer('parcela_extras');
          $table->string('status',50)->dafault('Ativo');
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
        Schema::dropIfExists('cursos');
    }
}
