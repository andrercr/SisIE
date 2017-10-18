<?php

namespace App\Http\Controllers\Catalogo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogo\CategoriaFormRequest;
use App\Models\Catalogo\Categorias;
use DB;


class CategoriaController extends Controller
{
	private $categorias;

	public function __construct(Categorias $categorias)
	{
		$this->categorias = $categorias;
	}

	public function index(Request $request)
	{
        $dados_pagina = [
        	'titulo' 	=> 'Visualizar Categorias',
        	'mapa' 		=> 'Categoria',
        ];

        $TotRegistros = Categorias::count();

		if($request)
		{
			$query = trim($request->get('searchText'));
			$categorias = Categorias::where('nome', 'LIKE', '%'.$query.'%')
		  	 						->orderby('id_categoria', 'desc')
									->paginate(10);

			return view('catalogo.categoria.index', [
				'categorias' 		=> $categorias,
				'searchText' 		=> $query,
				'dados_pagina' 		=> $dados_pagina,
				'TotRegistros'		=> $TotRegistros
				]);
		}
	}

	public function create()
	{
        $titulo_pagina = 'Cadastrar Nova Categoria';

		return view('catalogo.categoria.create-edit', compact('categoria', 'titulo_pagina'));

	}

	public function store(CategoriaFormRequest $request)
	{
		$dataForm = $request->all();

		$dataForm['status'] = ( !isset($dataForm['status']) ) ? 0 : 1 ;

		$insert = $this->categoria->create($dataForm);

		if( $insert )
			return redirect()->route('categorias.index');
		else
			return redirect()->back();
	}

	public function show($id)
	{
        $categoria = $this->categoria->find($id);

        $titulo_pagina = "Apagar Categoria: {$categoria->nome}";
		
		return view('catalogo.categoria.show', compact('categoria', 'titulo_pagina'));
	}

	public function edit($id)
	{
        $categoria = $this->categoria->find($id);

        $titulo_pagina = "Editar Categoria: {$categoria->nome}";

		return view('catalogo.categoria.create-edit', compact('categoria', 'titulo_pagina'));
	}

	public function update(CategoriaFormRequest $request, $id)
	{
		$dataForm = $request->all();

		$dataForm['status'] = ( !isset ( $dataForm['status'] )) ? 0 : 1 ;

        $categoria = $this->categoria->find($id);

		$update = $categoria->update($dataForm);

		if( $update )
			return redirect()->route('categorias.index');
		else
			return redirect()->route('categorias.edit', $id)->with(['errors' => 'Falha ao editar.']);
	}

	public function destroy(CategoriaFormRequest $request, $id)
	{
		// return 'funcionando...'.$id;

		$dataForm = $request->all();

		$dataForm['status'] = ( !isset ( $dataForm['status'] )) ? 0 : 1 ;

        $categoria = $this->categoria->find($id);
        
		$update = $categoria->update($dataForm);

		if( $update )
			return redirect()->route('categorias.index');
		else
			return redirect()->route('categorias.edit', $id)->with(['errors' => 'Falha ao editar.']);
	}
}




































