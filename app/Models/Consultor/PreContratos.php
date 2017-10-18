<?php

namespace App\Models\Consultor;

use Illuminate\Database\Eloquent\Model;
use App\Models\ACL\Usuarios;
use App\Models\Pedagogico\Cursos;

class PreContratos extends Model
{
	protected $table = 'pre_contratos';
	protected $primaryKey = 'id_precontrato';
	protected $fillable = ['id_precontrato', 'id_consultor', 'id_local', 'data_cadastro', 'origem_contrato', 'nome_aluno', 'sexo', 'data_nascimento', 'estado_civil', 'profissao', 'escolaridade', 'cep', 'numero', 'complemento', 'rua', 'bairro', 'cidade', 'uf',
	'fone_residencial', 'rg', 'cpf', 'fone_com_celular', 'nome_mae', 'email', 'nome_empresa', 'data_nascimento2', 'estado_civil2', 'rg_inscricao_estadual', 'cpf_cnpj', 'profissao2', 'escolaridade2', 'cep2', 'numero2', 'complemento2', 'rua2', 'bairro2', 'cidade2',
	'uf2', 'fone_com_celular2', 'id_curso', 'id_turma', 'taxa_matricula', 'qtd_parcelas', 'valor_pri_parcela', 'valor_liq_curso', 'dia_vcmto', 'status', ];

	public function qualConsultor()
	{
		return $this->belongsTo(Usuarios::class, 'id_consultor', 'id_usuario');
	}

	public function qualCurso()
	{
		return $this->belongsTo(Cursos::class, 'id_curso', 'id_curso' );
	}

	public function qualTurma()
	{
		return $this->belongsTo(Cursos::class, 'id_curso', 'id_curso' );
	}

}
