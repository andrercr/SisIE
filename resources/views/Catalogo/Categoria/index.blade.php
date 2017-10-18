@extends('template')

@section('content-header')
<section class="content-header">
	<h1>
		{{ $dados_pagina->mapa or 'Gestão de Categorias'}}
		<small>Preview</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Catálogo</a></li>
		<li class="active">Categorias</li>
	</ol>
</section>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-default">
				<div class="box-header">
					<h3 class="box-title">Lista das Categorias</h3>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<a href="{{route('categorias.create')}}"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Nova Categoria</button></a>
						</div>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover table-bordered">
						<tr style="background-color: #fafafa;">
							<th>Nome</th>
							<th>Descrição</th>
							<th class="text-center">Status</th>
							<th class="text-center">Ações</th>
						</tr>
						@foreach ($categorias as $categoria)
						<tr role="row" class="odd" style="height: 10px;">
							<td>{{ $categoria->nome}}</td>
							<td>{{ $categoria->descricao}}</td>
							<td class="text-center"><span class="label label-{{ ($categoria->status == '1' ) ? 'success' : 'default' }}">{{ ($categoria->status == '1' ) ? 'Ativo' : 'Inativo' }}</span></td></td>
							<td class="text-center">
								<a href="{{ route('categorias.edit', $categoria->id) }}" style="color: lightblue: ; padding: 0px 5px 0px 5px">
									<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
								</a>
								<a href="" data-target="#modal-delete-{{ $categoria->id }}" data-toggle="modal" style="color: darkred; padding: 0px 5px 0px 5px">
									<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
						@include('catalogo.categoria.modal')
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
				Mostrando {{ $categorias->firstItem() }} a {{ $categorias->lastItem() }} de {{ $categorias->total() }} registros
			</div>
		</div>
		<div class="col-sm-6">
			<div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
				{{$categorias->render()}}
			</div>
		</div>
	</div>
</section>
@endsection



<!-- ============================================ -->
<!-- 
			<div class="col-sm-6">
				<div id="example1_filter" class="dataTables_filter pull-right">
					arroba  include('catalogo.categoria.search')
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 table-responsive table table-hover">
				<table id="example1" class="table table-bordered table-striped dataTable table-condensed table-hover" role="grid" aria-describedby="example1_info"> -->