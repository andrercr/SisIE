<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <style type="text/css">
  @media print{
    .btnPrint {
      display:none;
    }
  }
    /*==================================================================================================*/
  html { font-family: "Lucida Sans", sans-serif; }
  * { box-sizing: border-box; }





    /*==================================================================================================*/
  .vermelho { border: 1px solid red  ; }
  </style>
  <title>{{ $precontrato->nome_aluno }}</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row vermelho">
      <div class="col-12 text-center">
        <button onclick="print()" class="text-center btnPrint">Imprimir</button>
      </div>
    </div>
    <img src="{{ asset('all/img/logo.png') }}" alt="Instituo Embelleze Logomarca" width="300"></img>
    <div class="row">
      <div class="col-12">
        <p class="h3 text-center text-uppercase">Pré-Contrato</p>
      </div><br>
    </div>
    <div class="row">
      <div class="form-group col-9">
        {{ Form::label('Consultor') }}
        {{ Form::text('nome_consultor', session('usuario')->nome, ['class' => 'form-control', 'disabled']) }}
        {{ Form::hidden('id_consultor', session('usuario')->id_usuario ) }}
      </div>
      <div class="form-group col-3">
        {{ Form::label('Local') }}
        {{ Form::text('local', 'Caratinga', ['class' => 'form-control', 'placeholder' => 'Caratinga', 'disabled']) }}
        {{ Form::hidden('id_local', 1 ) }}
      </div>
      <div class="form-group col-9">
        {{ Form::label('Origem da Matrícula') }}
        {{ Form::text('origem_matricula', null, ['class' => 'form-control', 'placeholder' => 'Origem da Matrícula']) }}
      </div>
      <div class="form-group col-3">
        {{ Form::label('Data') }}
        {{ Form::date('data_cadastro2', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
        {{ Form::hidden('data_cadastro', \Carbon\Carbon::now() ) }}
      </div>
    </div>
