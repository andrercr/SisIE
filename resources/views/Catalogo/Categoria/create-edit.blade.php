@extends('template')
@section('content')
<section class="content-header">
	<h1>{{ $dados_pagina->mapa or 'Gestão de Categorias'}}</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i > Home</a></li>
		<li class="active">MAPA</li>
	</ol>
</section>
<section class="content">
	<div class="box box-{{ (isset ($categoria)) ? 'warning' : 'success' }}">
		<div class="box-header with-border">
			<h3 class="box-title">{{ $titulo_pagina }}</h3>
		</div>

		@if( isset($errors) && count($errors) > 0 )
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="fa fa-bullhorn"></i></h4>
			@foreach( $errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		@endif

		@if( isset($categoria))
		{!! Form::model( $categoria, [ 'route' => [ 'categorias.update', $categoria->id] , 'class' => 'form', 'method' => 'PUT' ]) !!}
		@else
		{!! Form::open([ 'route' => 'categorias.store', 'class' => 'form']) !!}
		@endif

		<div class="box-body">
			<div class="form-group">
				<label>Nome</label>
				{!! Form::text('nome', null, [ 'class' => 'form-control', 'placeholder' => 'Nome']) !!}
			</div>
			<div class="form-group">
				<label>Descrição</label>
				{!! Form::textarea('descricao', null, [ 'class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '3']) !!}
			</div>
			<div class="form-group">
				<label>Status</label></br>
				<input name="status" type="checkbox" id="statuss" value=null >
				<!-- {!! Form::checkbox('status', null, [ 'class' => 'form-control', 'id' => 'statuss' ]) !!} -->
				<label for="statuss" style="font-weight: normal;">Ativo</label>
			</div>
			<div class="box-footer">
				<a class="btn btn-default" href="{{ route('categorias.index') }}">Voltar</a>
				{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary pull-right' ]) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection