<?php

namespace App\Models\Pedagogico;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pedagogico\Turmas;
use App\Models\Pedagogico\Cursos;

class Turmas extends Model
{
  protected $table = 'turmas';
  protected $primaryKey = 'id_turma';
  protected $fillable = [ 'id_turma', 'id_curso', 'sigla_turma', 'data_inicio', 'data_final', 'dia_semana', 'horario_inicio', 'horario_fim', 'sala', 'status'];

  public function qualcurso()
	{
		return $this->belongsTo(Cursos::class, 'id_curso', 'id_curso');
	}

}
