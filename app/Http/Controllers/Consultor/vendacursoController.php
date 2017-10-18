<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pedagogico\Cursos;
use DB;

class precontratosController extends Controller
{
	public function index(Request $request)
	{
		$cursos = Cursos::pluck('nome', 'id_curso');

		return view('consultor.precontrato.index', compact('cursos', 'request'));
	}

	public function calcularCurso(Request $request)
	{
		$cursos 		= DB::table('cursos')
						->where('id_curso', '=', $request->input('_curso'))
						->get();
		$cursos['qtd_parcelas'] = $request->input('_qtdparcelas');
		$cursos['desconto_dado'] = $request->input('_desconto');

		return view('consultor.precontrato.calcularCurso', compact('cursos'));
	}

	public function store(Request $request)
	{

	}

	public function show($id)
	{

	}

	public function edit($id)
	{

	}

	public function update(Request $request, $id)
	{

	}

	public function destroy($id)
	{

	}
}