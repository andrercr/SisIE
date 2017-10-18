<?php

namespace App\Http\Controllers\Pedagogico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Http\Controllers\ACL\usuariosController;
use App\Models\Pedagogico\Cursos;
use DB;

class cursosController extends Controller
{   
  private $cursos;

  public function __construct(Cursos $cursos)
  {
    $this->cursos = $cursos;
  }

  public function index(Request $request)
  {
    $dados_pagina = [
      'titulo'    => 'Visualizar Cursos',
      'mapa'      => 'Cursos',
    ];

    $cursos = Cursos::where('status', 'Ativo')
    ->orderby('nome', 'asc')
    ->paginate(10);

    return view('Pedagogico.Cursos.index', [
      'cursos'            => $cursos,
      'dados_pagina'      => $dados_pagina,
    ]);
  }

  public function create()
  {
    return view('Pedagogico.Cursos.create-edit');
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
