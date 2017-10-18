<?php

namespace App\Http\Controllers\Consultor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ACL\Usuarios;
use App\Models\Consultor\PreContratos;

class comissoesController extends Controller
{

	public function index()
	{
		$dados_pagina = [
			'titulo' 	=> 'Visualizar Pré-Contratos',
			'mapa' 		=> 'Pré-Contratos',
		];

		$metas = [];
		$metas['cursos'] = 30;
		$metas['pri+ma'] = 7900;
		$metas['fatura'] = 50000;

		$consultores = Usuarios::where('funcao', '=', 'Consultor')
									->where('status', '=', 1)
									->get();

		$qtdprecontr = [];
		$faturamento = [];
		foreach ($consultores as $consultor)
		{
			$qtdprecontr[$consultor->id_usuario] = PreContratos::
																						whereMonth('data_cadastro', date('m')-1 )
																						->whereYear('data_cadastro', date('Y') )
																						->where('id_consultor', $consultor->id_usuario)->count();
			$somamatricu[$consultor->id_usuario] = PreContratos::
																						whereMonth('data_cadastro', date('m')-1 )
																						->whereYear('data_cadastro', date('Y') )
																						->where('id_consultor', $consultor->id_usuario)->sum('taxa_matricula');
			$somapriparc[$consultor->id_usuario] = PreContratos::
																						whereMonth('data_cadastro', date('m')-1 )
																						->whereYear('data_cadastro', date('Y') )
																						->where('id_consultor', $consultor->id_usuario)->sum('valor_pri_parcela');

			$contratos = PreContratos::all()->count();
			$faturamento[$consultor->id_usuario] = 0;

			for ($i = 0; $i <= $contratos; $i++)
			{
    		$somaprecontratos[$i] = (PreContratos::where('id_consultor',$consultor->id_usuario)
    											 ->where('id_precontrato', $i)
    											 ->sum('valor_pri_parcela')
    							   * PreContratos::where('id_consultor', $consultor->id_usuario)
    											 ->where('id_precontrato', $i)
    											 ->sum('qtd_parcelas'))
    							   + PreContratos::where('id_consultor', $consultor->id_usuario)
    											 ->where('id_precontrato', $i)
    											 ->sum('taxa_matricula');
    		$faturamento[$consultor->id_usuario] = $faturamento[$consultor->id_usuario] + $somaprecontratos[$i];
			}
		}

		return view('Consultor.Comissoes.index', [
			'dados_pagina' 	=> $dados_pagina,
			'metas' 				=> $metas,
			'consultores' 	=> $consultores,
			'qtdprecontr'		=> $qtdprecontr,
			'somamatricu'		=> $somamatricu,
			'somapriparc'		=> $somapriparc,
			'faturamento'		=> $faturamento,
		]);

	}
}
