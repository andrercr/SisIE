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
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Pré Contrato</h3>
    </div>
    <div class="box-body">
      {!! Form::open(['action' => 'Consultor\precontratoController@calcularCurso']) !!}
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Curso</label>
            {!! Form::select('_curso', $cursos, 'null', ['class' => 'form-control select2 select2-hidden-accessible', 'placeholder' => 'Selelcione...']) !!}
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Qtd parcelas</label>
            {!! Form::number('_qtdparcelas', 'null', ['class' => 'form-control select2 select2-hidden-accessible', 'placeholder' => 'Max: 16' ]) !!} 
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Desconto</label>
            {!! Form::number('_desconto', 'null', ['class' => 'form-control select2 select2-hidden-accessible', 'placeholder' => 'Max: 30' ]) !!} 
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label>Qtd parcelas</label>
            {!! Form::submit('Calcular', ['class' => 'btn btn-primary']) !!} 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection