<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('turmas', function (Blueprint $table) {
        $table->increments('id_turma');
        $table->integer('id_curso')->unsigned();
        $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');
        $table->string('sigla_turma');
        $table->date('data_inicio');
        $table->date('data_final');
        $table->string('dia_semana');
        $table->time('horario_inicio');
        $table->time('horario_fim');
        $table->integer('sala');
        $table->string('status',50)->default('Ativo');
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
        Schema::dropIfExists('turmas');
    }
}
