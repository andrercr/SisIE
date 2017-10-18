<?php

namespace App\Http\Controllers\Gerenciamento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Models\Consultor\PreContratos;
use App\Models\Pedagogico\Cursos;

class dashboardController extends Controller
{
  public function index()
  {
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

    $cores = array('purple', 'red', 'green', 'yellow', 'light-blue', 'aqua', 'grey', 'orange', 'black', 'brown');

    $qtdcursos = DB::table('pre_contratos')
                    ->select(DB::raw('id_curso, count(id_curso) as contador'))
                    ->whereMonth('data_cadastro', date('m')-1 )
                    ->whereYear('data_cadastro', date('Y') )
                    ->groupBy('id_curso')
                    ->get();
                    // dd($qtdcursos);

		return view('Gerenciamento.Dashboard.index', [
      'qtdcursos'     => $qtdcursos,
			'cores'     		=> $cores,
		]);
  }


}
