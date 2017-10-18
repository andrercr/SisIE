@extends('template')

@section('content-header')
<section class="content-header">
  <h1>
    {{ $dados_pagina->mapa or 'Contas'}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Financeiro</a></li>
    <li class="active">Contas</li>
  </ol>
</section>
@endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-default">
        <div class="box-header">
          <h3 class="box-title">Contas</h3>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover table-bordered">
            <tr style="background-color: #fafafa;">
              <th>Consultor</th>
              <th>Nome Aluno</th>
              <th class="text-center">Data Cadastro</th>
              <th class="text-center">Curso</th>
              <th class="text-center">Taxa de Matrícula</th>
              <th class="text-center">Valor Primeira Parcela</th>
              <th class="text-center">Qtd Parcelas</th>
              <th class="text-center">Ações</th>
            </tr>
            @foreach ($precontratos as $precontrato)
            <tr role="row" class="odd" style="height: 10px;">
              <td>{{ $precontrato->qualConsultor->nome_display }}</td>
              <td>{{ $precontrato->nome_aluno }}</td>
              <td class="text-center">{{ strftime('%d/%m/%Y', strtotime($precontrato->data_cadastro)) }}</td>
              <td class="text-center">{{ $precontrato->qualCurso->sigla}}</td>
              <td class="text-center">R$ {{ number_format($precontrato->taxa_matricula, 2, ",", "." ) }}</td>
              <td class="text-center">R$ {{ number_format($precontrato->valor_pri_parcela, 2, ",", "." ) }}</td>
              <td class="text-center">{{ $precontrato->qtd_parcelas }}</td>
              <td class="text-center">
                <a href="{{ URL::to('consultor/precontratos/'.$precontrato->id_precontrato.'/imprimir') }}" style="color: grey; padding: 0px 5px 0px 5px">
                  <i class="fa fa-print" aria-hidden="true"></i>
                </a>
                <a href="{{route('precontratos.edit', $precontrato->id_precontrato)}}" style="color: lightblue: ; padding: 0px 5px 0px 5px">
                  <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
                </a>
                <a href="" data-target="#modal-delete-{{$precontrato->id_precontrato}}" data-toggle="modal" style="color: darkred; padding: 0px 5px 0px 5px">
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
        Mostrando {{ $precontratos->firstItem() }} a {{ $precontratos->lastItem() }} de {{ $precontratos->total() }} registros
      </div>
    </div>
    <div class="col-sm-6">
      <div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate">
        {{$precontratos->render()}}
      </div>
    </div>
  </div>
</section>
@endsection
