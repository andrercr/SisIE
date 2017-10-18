<?php

namespace App\Models\Pedagogico;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pedagogico\Turmas;
use App\Models\Pedagogico\Cursos;

class Cursos extends Model
{
  protected $table = 'cursos';
  protected $primaryKey = 'id_curso';
  protected $fillable = [ 'cod', 'area', 'nome', 'sigla', 'horas_semanais', 'duracao', 'carga_horaria', 'valor_total', 'desconto_maximo', 'parcela_maxima', 'parcela_extras', 'status'];
}
