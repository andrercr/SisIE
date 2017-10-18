<?php

namespace App\Http\Controllers\Catalogo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Catalogo\Categoria;
use App\Http\Requests\Catalogo\CategoriaFormRequest;
use DB;                                                 //  Ele Criou não sei pq


class ProdutoController extends Controller
{
	private $categoria;

	public function __construct(Categoria $categoria)
	{
		$this->categoria = $categoria;
	}

	public function index(Request $request)
	{
			return view('catalogo.produto.index');
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
        $titulo_pagina = "Apagar Categoria: {$categoria->nome}";

		return view('catalogo.categoria.show' );
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

	public function destroy($id)
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
}




































