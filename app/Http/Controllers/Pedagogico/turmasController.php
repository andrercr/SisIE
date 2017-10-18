<?php

namespace App\Http\Controllers\Pedagogico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Http\Controllers\ACL\usuariosController;
use App\Models\Pedagogico\Cursos;
use App\Models\Pedagogico\Turmas;
use DB;

class turmasController extends Controller
{   
  private $turmas;

  public function __construct(Turmas $turmas)
  {
    $this->turmas = $turmas;
  }

  public function index(Request $request)
  {
    $dados_pagina = [
      'titulo'    => 'Visualizar Turmas',
      'mapa'      => 'Turmas',
    ];

    $turmas = Turmas::where('status', 'Ativo')
                    ->orderby('sigla_turma', 'asc')
                    ->paginate(10);

    return view('Pedagogico.Turmas.index', [
      'turmas'            => $turmas,
      'dados_pagina'      => $dados_pagina,
    ]);
  }

public function create()
{

}

public function store(Request $request)
{
        //
}

public function show($id)
{
        //
}

public function edit($id)
{
        //
}

public function update(Request $request, $id)
{
        //
}

public function destroy($id)
{
        //
}
}
