@extends('template')
@section('content')
<section class="content-header">
	<h1>{{ $dados_pagina->mapa or 'Gestão de Categorias'}}</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">MAPA</li>
	</ol>
</section>
<section class="content">
<div class="box box-danger">
	<div class="box-header with-border">
		<h3 class="box-title">{{ $titulo_pagina }}</h3>
	</div>
	
	@if( isset($errors) && count($errors) > 0 )
	<div class="alert alert-danger">
		@foreach( $errors->all() as $error)
		<p>{{$error}}</p>
		@endforeach
	</div>
	@endif

	{!! Form::model( $categoria, [ 'route' => [ 'categorias.destroy', $categoria->id] , 'class' => 'form', 'method' => 'PUT' ]) !!}

	<div class="box-body">
		<div class="form-group">
			<label>Nome</label>
	{!! Form::text('nome', $categoria->nome, [ 'class' => 'form-control', 'placeholder' => 'Nome', 'readonly']) !!}
		</div>
		<div class="form-group">
			<label>Descrição</label>
			{!! Form::textarea('descricao', $categoria->descricao, [ 'class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '3', 'readonly']) !!}
		</div>
		<div class="box-footer">
			<a class="btn btn-default" href="{{ route('categorias.index') }}">Voltar</a>
			{!! Form::submit('Inativar', [ 'class' => 'btn btn-danger pull-right' ]) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</section>
@endsection