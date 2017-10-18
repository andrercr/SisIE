@extends('template')

@section('content-header')
<section class="content-header">
  <h1>
    {{ $dados_pagina->mapa or 'Gestão de Turmas'}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Pedagógico</a></li>
    <li class="active">Turmas</li>
  </ol>
</section>
@endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-default">
        <div class="box-header">
          <h3 class="box-title">Turmas</h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{{route('turmas.create')}}"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Nova Turma</button></a>
            </div>
          </div>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover table-bordered">
            <tr style="background-color: #fafafa;">
              <th class="text-center">Curso</th>
              <th class="text-center">Sigla</th>
              <th class="text-center">Data Início</th>
              <th class="text-center">Data Término</th>
              <th class="text-center">Dia da Semana</th>
              <th class="text-center">Horário</th>
              <th class="text-center">Sala</th>
              <th class="text-center">Carga Horária</th>
              <th class="text-center">Ações</th>
            </tr>
            @foreach ($turmas as $turma)
            <tr role="row" class="odd";">
              <td>{{ $turma->qualCurso->nome }}</td>
              <td class="text-center">{{ $turma->sigla_turma }}</td>
              <td class="text-center">{{ strftime('%d/%m/%Y', strtotime($turma->data_inicio)) }}</td>
              <td class="text-center">{{ strftime('%d/%m/%Y', strtotime($turma->data_final)) }}</td>
              <td class="text-center">{{ $turma->dia_semana }}</td>
              <td class="text-center">{{ $turma->horario_inicio }} às {{ $turma->horario_fim }}</td>
              <td class="text-center">{{ $turma->sala }}</td>
              <td class="text-center">{{ $turma->qualCurso->carga_horaria }} hrs</td>
              <td class="text-center">
                <a href="" style="color: lightblue: ; padding: 0px 5px 0px 5px">
                  <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
                </a>
                <a href="" data-target="#modal-delete-" data-toggle="modal" style="color: darkred; padding: 0px 5px 0px 5px">
                  <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
        Mostrando {{ $turmas->firstItem() }} a {{ $turmas->lastItem() }} de {{ $turmas->total() }} registros
      </div>
    </div>
    <div class="col-sm-6">
      <div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
        {{ $turmas->render() }}
      </div>
    </div>
  </div>
</section>
@endsection
