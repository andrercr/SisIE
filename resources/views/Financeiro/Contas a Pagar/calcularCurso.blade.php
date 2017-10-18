@extends('template')
@section('content')
<section class="content-header">
  <h1>{{ $dados_pagina->mapa or 'Pré-Contrato'}}</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">MAPA</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $cursos[0]->nome }}</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="form-inline">
            <div class="row">
              <table id="example2" class="table table-bordered table-hover" role="grid">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc">Cód. Curso</th>
                    <th class="sorting">Sigla</th>
                    <th class="sorting">N° de Horas Semanais</th>
                    <th class="sorting">Duração Prevista</th>
                    <th class="sorting">Carga Horária</th>
                    <th class="sorting">Valor Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr role="row" class="odd">
                    <td>{{ $cursos[0]->cod }}</td>
                    <td>{{ $cursos[0]->sigla }}</td>
                    <td>{{ $cursos[0]->horas_semanais }}</td>
                    <td>{{ $cursos[0]->duracao }}</td>
                    <td>{{ $cursos[0]->carga_horaria }}</td>
                    <td>{{ $cursos[0]->valor_total }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <a href="/consultor/precontrato" class="btn btn-primary">Voltar</a>
    </div>
    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Demonstração das Parcelas</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
              <tr role="row">
                <th class="sorting_asc">Parcela</th>
                <th class="sorting">Valor Original</th>
                <th class="sorting">Valor Com Desconto de {{ $cursos['desconto_dado'] }} %</th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < $cursos['qtd_parcelas'] ; $i++)
              <tr role="row" class="odd">
                <td>{{ $i + 1 }}</td>
                <td>{{ $cursos[0]->valor_total / $cursos['qtd_parcelas'] }}</td>
                <td>{{ ( $cursos[0]->valor_total / $cursos['qtd_parcelas'] ) * (1 - ($cursos['desconto_dado'] / 100 )) }}</td>
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection