<?php

//Default
Route::get('/', 'ACL\usuariosController@index')->name('home');

//Login
Route::get ('/frmEntrar' , 'ACL\usuariosController@index');
Route::post('/' , 'ACL\usuariosController@FazerLogin');

//Recuperar Senha
Route::get ('/recuperarsenha'	, 'ACL\usuariosController@frmRecuperarSenha');
Route::post('/recuperarsenha'	, 'ACL\usuariosController@exeRecuperarSenha');
Route::post('/emailenviado'		, 'ACL\usuariosController@ViewEmailEnviado');

//Logout
Route::get ('/logout'  			, 'ACL\usuariosController@FazerLogout')->name('logout');

//NovaConta
Route::get ('/frmCriar' , 'ACL\usuariosController@index');
Route::post('/exeCriar' , 'ACL\usuariosController@index');

// ===========================================================================> CONSULTORES

//Cursos
Route::get('/', 'ACL\usuariosController@index');

//ADMIN-LTE
Route::get('/admin', function () {
	return view('template');
});

Route::group(['prefix' => '/consultor', 'namespace' => 'Consultor'], function() {
	Route::resource('/comissoes',								'comissoesController');
	Route::resource('/vendacurso',								'vendacursoController');
	Route::resource('/direitoimagem',							'direitoimagemController');
	Route::post('/calcularCurso',								'precontratoController@calcularCurso');
	Route::resource('/precontratos',							'precontratosController');
	Route::get('/precontratos/{id}/imprimir', 					'precontratosController@imprimirPreContrato');
	// Route::get('/precontratos/{id}/printPreview', 				'precontratosController@imprimirPreContrato');
});

Route::group(['prefix' => '/pedagogico', 'namespace' => 'Pedagogico'], function() {
	Route::resource('/cursos', 									'cursosController');
	Route::resource('/turmas', 									'turmasController');
});

Route::group(['prefix' => '/catalogo', 'namespace' => 'Catalogo'], function() {
	Route::resource('/produtos', 								'produtoController');
	Route::resource('/servicos', 								'servicoController');
	Route::resource('/categorias',								'categoriaController');
});

Route::group(['prefix' => '/gerenciamento', 'namespace' => 'Gerenciamento'], function() {
	Route::resource('/dashboard', 								'dashboardController');
});

// Av. Brasil,4635 , - SANTA TEREZINHA - POLO UNINTER
