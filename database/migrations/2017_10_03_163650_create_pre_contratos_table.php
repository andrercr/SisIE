<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pre_contratos', function (Blueprint $table) {
      $table->increments('id_precontrato');
      $table->integer('id_consultor')->unsigned();
      $table->foreign('id_consultor')->references('id_usuario')->on('usuarios')->onDelete('cascade');
      $table->integer('id_local');
      $table->dateTime('data_cadastro');
      $table->string('origem_contrato', 255);
      $table->string('nome_aluno', 255);
      $table->string('sexo', 255);
      $table->date('data_nascimento');
      $table->string('estado_civil', 255);
      $table->string('profissao', 255);
      $table->string('escolaridade', 255);
      $table->string('cep', 255);
      $table->integer('numero');
      $table->string('complemento', 255)->nullable();
      $table->string('rua', 255);
      $table->string('bairro', 255);
      $table->string('cidade', 255);
      $table->string('uf', 255);
      $table->string('fone_residencial', 255)->nullable();
      $table->string('rg', 255)->nullable();;
      $table->string('cpf', 255);
      $table->string('fone_com_celular', 255)->nullable();
      $table->string('nome_mae', 255);
      $table->string('email', 255)->nullable();
      $table->string('nome_empresa', 255)->nullable();
      $table->date('data_nascimento2')->nullable();
      $table->string('estado_civil2', 255)->nullable();
      $table->string('rg_inscricao_estadual', 255)->nullable();
      $table->string('cpf_cnpj', 255)->nullable();
      $table->string('profissao2', 255)->nullable();
      $table->string('escolaridade2', 255)->nullable();
      $table->string('cep2', 255)->nullable();
      $table->integer('numero2')->nullable();
      $table->string('complemento2', 255)->nullable();
      $table->string('rua2', 255)->nullable();
      $table->string('bairro2', 255)->nullable();
      $table->string('cidade2', 255)->nullable();
      $table->string('uf2', 255)->nullable();
      $table->string('fone_com_celular2', 255)->nullable();
      $table->integer('id_curso')->unsigned();
      $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');
      $table->integer('id_turma')->unsigned();
      $table->foreign('id_turma')->references('id_turma')->on('turmas')->onDelete('cascade');
      $table->decimal('taxa_matricula', 6, 2);
      $table->integer('qtd_parcelas');
      $table->decimal('valor_pri_parcela', 9, 2);
      $table->decimal('valor_liq_curso', 9, 2);
      $table->integer('dia_vcmto');
      $table->string('status', 50)->default('Apenas Pré-Contrato');
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
        Schema::dropIfExists('pre_contratos');
    }
}
