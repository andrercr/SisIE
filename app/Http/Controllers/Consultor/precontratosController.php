<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ACL\Usuarios;
use App\Models\Pedagogico\Cursos;
use App\Models\Pedagogico\Turmas;
use App\Models\Consultor\PreContratos;
use DB;

class precontratosController extends Controller
{
	private $precontratos;

	public function __construct(Precontratos $precontratos)
	{
		$this->precontratos = $precontratos;
	}

	public function index()
	{
		$dados_pagina = [
			'titulo' 	=> 'Visualizar Pré-Contratos',
			'mapa' 		=> 'Pré-Contratos',
		];

		$precontratos = PreContratos::where('id_local', '1')
																// ->where('status', 'Contrato')
																// ->whereMonth('data_cadastro', date('m') )
																->whereYear('data_cadastro', date('Y') )
																// ->where('id_consultor', '6')
																// ->where('id_consultor', '7')
																// ->where('id_consultor', '8')
																->orderBy('data_cadastro', 'DESC')
																->paginate(10);

		return view('Consultor.PreContratos.index', [
			'precontratos' 		=> $precontratos,
			'dados_pagina' 		=> $dados_pagina,
		]);
	}

	public function create()
	{
		$cursos = Cursos::pluck('nome', 'id_curso');
		$turmas = Turmas::where('status', 'Aberta')->pluck('sigla_turma', 'id_turma');
		return view('Consultor.PreContratos.create-edit', compact('cursos', 'turmas'));
	}

	public function store(Request $request)
	{
		$dataForm = $request->all();

		$insert = $this->precontratos->create($dataForm);

		if( $insert )
			return redirect()->route('precontratos.index');
		else
			return redirect()->back();
	}

	public function show($id)
	{
		$precontratos = $this->precontratos->find($id);

		$titulo_pagina = "Apagar Pré-Contrato de: {$precontratos->nome}";

		return view('Consultor.PreContratos.show', compact('precontratos', 'titulo_pagina'));
	}

	public function edit($id)
	{
		$precontratos = $this->precontratos->find($id);

		$cursos = Cursos::pluck('nome', 'id_curso');

		$titulo_pagina = "Editar Pré-Contrato de: {$precontratos->nome}";

		return view('Consultor.PreContratos.create-edit', compact('precontratos', 'titulo_pagina', 'cursos'));
	}

	public function update(Request $request, $id)
	{
		$dataForm = $request->all();

		$precontratos = $this->precontratos->find($id);

		$update = $precontratos->update($dataForm);

		if( $update )
			return redirect()->route('PreContratos.index');
		else
			return redirect()->route('PreContratos.edit', $id)->with(['errors' => 'Falha ao editar.']);
	}

	public function destroy($id)
	{

	}

	public function imprimirPreContrato($id)
	{
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

		$precontrato = $this->precontratos->with('consultorDono')->find($id);
// dd($precontrato);
		return view('consultor.precontratos.imprimir', compact('precontrato'));
	}
}
