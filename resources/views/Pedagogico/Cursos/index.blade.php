@extends('template')

@section('content-header')
<section class="content-header">
	<h1>
		{{ $dados_pagina->mapa or 'Gestão de Cursos'}}
		<small>Preview</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Pedagógico</a></li>
		<li class="active">Cursos</li>
	</ol>
</section>
@endsection

@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-default">
				<div class="box-header">
					<h3 class="box-title">Cursos</h3>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<a href="{{route('cursos.create')}}"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Novo Curso</button></a>
						</div>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover table-bordered">
						<tr style="background-color: #fafafa;">
							<th class="text-center">Cód</th>
							<th>Nome</th>
							<th class="text-center">Sigla</th>
							<th class="text-center">Horas Semanais</th>
							<th class="text-center">Duração <small>(Mês)</small></th>
							<th class="text-center">Carga Horária <small>(Horas)</small></th>
							<th class="text-center">Valor Total <small>(R$)</small></th>
							<th class="text-center">Máx. Desconto  <small>(%)</small></th>
							<th class="text-center">Máx. Parcelas</th>
							<th class="text-center">Ações</th>
						</tr>
						@foreach ($cursos as $curso)
						<tr role="row" class="odd";">
							<td class="text-center">{{ $curso->cod}}</td>
							<td>{{ $curso->nome }}</td>
							<td class="text-center">{{ $curso->sigla }}</td>
							<td class="text-center">{{ $curso->horas_semanais }}</td>
							<td class="text-center">{{ $curso->duracao }}</td>
							<td class="text-center">{{ $curso->carga_horaria }}</td>
							<td class="text-center">{{ number_format($curso->valor_total, 2, ",	", ".") }}</td>
							<td class="text-center">{{ number_format($curso->desconto_maximo, 1) }}</td>
							<td class="text-center">{{ $curso->parcela_maxima + $curso->parcela_extras }}</td>
							<td class="text-center">
								<a href="" style="color: lightblue: ; padding: 0px 5px 0px 5px">
									<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
								</a>
								<a href="" data-target="#modal-delete-" data-toggle="modal" style="color: darkred; padding: 0px 5px 0px 5px">
									<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
						<!-- <td><span class="label label-{{ ($curso->status == '1' ) ? 'success' : 'default' }}">{{ ($curso->status == '1' ) ? 'Ativo' : 'Inativo' }}</span></td> -->
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
				Mostrando {{ $cursos->firstItem() }} a {{ $cursos->lastItem() }} de {{ $cursos->total() }} registros
			</div>
		</div>
		<div class="col-sm-6">
			<div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
				{{ $cursos->render() }}
			</div>
		</div>
	</div>
</section>
@endsection
