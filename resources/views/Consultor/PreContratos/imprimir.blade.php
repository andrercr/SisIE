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
    .container {
      max-width: none;
      marg
    }
  }
  body{line-height: initial; !important;}

  .col-1  { max-width: calc(   8.33% - 6px); }
  .col-2  { max-width: calc(  16.66% - 6px); }
  .col-3  { max-width: calc(  25.00% - 6px); }
  .col-4  { max-width: calc(  33.33% - 6px); }
  .col-5  { max-width: calc(  41.67% - 6px); }
  .col-6  { max-width: calc(  50.00% - 6px); }
  .col-7  { max-width: calc(  58.33% - 6px); }
  .col-8  { max-width: calc(  66.67% - 6px); }
  .col-9  { max-width: calc(  75.00% - 6px); }
  .col-10 { max-width: calc(  83.33% - 6px); }
  .col-11 { max-width: calc(  91.67% - 6px); }
  .col-12 { max-width: calc( 100.00% - 6px); }

  .borda  { border: 1px solid black; border-radius: 5px; padding-left: 7.5px; padding-right: 7.5px; margin: 2px 3px; }
  .campo  { font-size: 13px ; }
  .h6     { margin: 7px 0px 0px 5px; }
  label   { font-size: 10px ; font-weight:bold; text-transform: uppercase;}

</style>

<title>Imprimir Pré-Contrato</title>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <button onclick="print()" class="btnPrint">Imprimir</button>
      </div>
    </div>
    <img src="{{ asset('all/img/logo.png') }}" alt="Instituo Embelleze Logomarca" width="200">
    <div class="row">
      <div class="col-12">
        <p class="h3 text-center text-uppercase">Pré-Contrato</p>
      </div><br>
    </div>
    <div class="row">
      <div class="borda col-3">
        <label>Consultor</label>
        <div class="campo vermelho">
          {{ $precontrato->consultorDono->nome_display }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Data</label>
        <div class="campo vermelho">
          {{ strftime('%d/%m/%Y', strtotime($precontrato->data_cadastro)) }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Origem da Matrícula</label>
        <div class="campo vermelho">
          {{ $precontrato->origem_contrato }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Local</label>
        <div class="campo vermelho">
          {{ ($precontrato->id_local==1) ? "Caratinga" : "Outro Local" }}
        </div>
      </div>
    </div>
    <div class="row">
      <p class="h6 text-right text-uppercase">01 - Da Identificação do Aluno</p>
    </div>
    <div class="row">
      <div class="borda col-6">
        <label>Nome do Aluno</label>
        <div class="campo vermelho">
          {{ $precontrato->nome_aluno }}
        </div>
      </div>
      <div class="borda col-1">
        <label>Sexo</label>
        <div class="campo vermelho">
          {{ $precontrato->sexo }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Data de Nascimento</label>
        <div class="campo vermelho">
          {{ strftime('%d/%m/%Y', strtotime($precontrato->data_nascimento)) }}
        </div>
      </div>
      <div class="borda col-2">
        <label>Estado Civil</label>
        <div class="campo vermelho">
          {{ $precontrato->estado_civil }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Profissão do Aluno</label>
        <div class="campo vermelho">
          {{ $precontrato->profissao }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Escolaridade</label>
        <div class="campo vermelho">
          {{ $precontrato->escolaridade }}
        </div>
      </div>
      <div class="borda col-3">
        <label>RG</label>
        <div class="campo vermelho">
          {{ $precontrato->rg }}
        </div>
      </div>
      <div class="borda col-3">
        <label>CPF</label>
        <div class="campo vermelho">
          {{ $precontrato->cpf }}
        </div>
      </div>
      <div class="borda col-2">
        <label>CEP</label>
        <div class="campo vermelho">
          {{ $precontrato->cep }}
        </div>
      </div>
      <div class="borda col-1">
        <label>Número</label>
        <div class="campo vermelho">
          {{ $precontrato->numero }}
        </div>
      </div>
      <div class="borda col-1">
        <label>Compl.</label>
        <div class="campo vermelho">
          {{ $precontrato->complemento }}
        </div>
      </div>
      <div class="borda col-5">
        <label>Logradouro</label>
        <div class="campo vermelho">
          {{ $precontrato->rua }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Bairro</label>
        <div class="campo vermelho">
          {{ $precontrato->bairro }}
        </div>
      </div>
      <div class="borda col-3">
        <label>Cidade</label>
        <div class="campo vermelho">
          {{ $precontrato->cidade }}
        </div>
      </div>
      <div class="borda col-1">
        <label>Estado</label>
        <div class="campo vermelho">
          {{ $precontrato->uf }}
        </div>
      </div>
      <div class="borda col-2">
        <label>Telefone Residencial</label>
        <div class="campo vermelho">
          {{ $precontrato->fone_residencial }}
        </div>
      </div>
      <div class="borda col-2">
        <label>Telefone Celular</label>
        <div class="campo vermelho">
          {{ $precontrato->fone_com_celular }}
        </div>
      </div>
      <div class="borda col-4">
        <label>E-Mail</label>
        <div class="campo vermelho">
          {{ $precontrato->email }}
        </div>
      </div>
      <div class="borda col-5">
        <label>Nome da Mãe</label>
        <div class="campo vermelho">
          {{ $precontrato->nome_mae }}
        </div>
      </div>
      <div class="borda col-7">
        <label>Observações</label>
        <div class="campo vermelho">
        </div>
      </div>
    </div>
    <div class="row">
      <p class="h6 text-right text-uppercase">02 - Da Prestadora de Serviços</p>
    </div>
    <div class="row">
      <div class="borda col-12">
        <div class="campo vermelho">
          "JAHER CURSOS E COMERCIO LTDA., EMPRESA INSCRITA NO CNPJ SOB O Nº 22.842.954/0001-84, SEDIADA NESTA CIDADE DE CARATINGA, NA RUA RAUL SOARES, 49/SALA 201 – CENTRO, DESIGNADA PRESTADORA DE SERVIÇOS E DE OUTRO LADO, O TOMADOR DE SERVIÇOS, IDENTIFICADO NO QUADRO 01, DESIGNADO (A) ALUNO."
        </div>
      </div>
    </div>
    <div class="row">
      <p class="h6 text-right text-uppercase">03 - Do Responsável Deste Contrato</p>
    </div>
    <div class="row">
      <div class="col-6 borda">
        <label>Nome / Empresa</label>
        <div class="campo vermelho">
          {{ $precontrato->nome_empresa }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Data de Nascimento</label>
        <div class="campo vermelho">
          {{ strftime('%d/%m/%Y', strtotime($precontrato->data_nascimento2)) }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Estado Civil</label>
        <div class="campo vermelho">
          {{ $precontrato->estado_civil2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>RG</label>
        <div class="campo vermelho">
          {{ $precontrato->rg_inscricao_estadual }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>CPF/CNPJ</label>
        <div class="campo vermelho">
          {{ $precontrato->cpf_cnpj }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Profissão</label>
        <div class="campo vermelho">
          {{ $precontrato->profissao2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Escolaridade</label>
        <div class="campo vermelho">
          {{ $precontrato->escolaridade2 }}
        </div>
      </div>
      <div class="col-2 borda">
        <label>CEP</label>
        <div class="campo vermelho">
          {{ $precontrato->cep2 }}
        </div>
      </div>
      <div class="col-2 borda">
        <label>Número</label>
        <div class="campo vermelho">
          {{ $precontrato->numero2 }}
        </div>
      </div>
      <div class="col-2 borda">
        <label>Compl.</label>
        <div class="campo vermelho">
          {{ $precontrato->complemento2 }}
        </div>
      </div>
      <div class="col-6 borda">
        <label>Logradouro</label>
        <div class="campo vermelho">
          {{ $precontrato->rua2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Bairro</label>
        <div class="campo vermelho">
          {{ $precontrato->bairro2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Cidade</label>
        <div class="campo vermelho">
          {{ $precontrato->cidade2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Estado</label>
        <div class="campo vermelho">
          {{ $precontrato->uf2 }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Telefone Celular / Comecial</label>
        <div class="campo vermelho">
          {{ $precontrato->fone_com_celular2 }}
        </div>
      </div>
    </div>
    <div class="row">
      <p class="h6 text-right text-uppercase">04 - Do Valor do Contrato e das Condições de Pagamento</p>
    </div>
    <div class="row">
      <div class="col-2 borda">
        <label>Taxa de Matrícula</label>
        <div class="campo vermelho">
          R$ {{ number_format($precontrato->taxa_matricula, 2, ",", "." )}}
        </div>
      </div>
      <div class="col-2 borda">
        <label>Qtd de Parcelas</label>
        <div class="campo vermelho">
          {{ $precontrato->qtd_parcelas }}
        </div>
      </div>
      <div class="col-2 borda">
        <label>Valor da 1ª Parcela</label>
        <div class="campo vermelho">
          R$ {{ number_format($precontrato->valor_pri_parcela, 2, ",", "." )}}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Dia de Venc. a partir da 2° Parcela</label>
        <div class="campo vermelho">
          {{ $precontrato->dia_vcmto }}
        </div>
      </div>
      <div class="col-3 borda">
        <label>Valor Total Líquido do Curso</label>
        <div class="campo vermelho">
          R$ {{ number_format($precontrato->valor_liq_curso, 2, ",", "." )}}
        </div>
      </div>
    </div>

    <div class="row">
      <p class="h6 text-right text-uppercase">05 - Da Identificação do Curso, Prazo e Duração</p>
    </div>
    <div class="row">
      <div class="col-4 borda">
        <label>Curso</label>
        <div class="campo vermelho">
          {{ $precontrato->id_curso }}Cabeleireiro
        </div>
      </div>
      <div class="col-4 borda">
        <label>Turma</label>
        <div class="campo vermelho">
          {{ $precontrato->id_turma }}CPAH
        </div>
      </div>
      <div class="col-4 borda">
        <label>Data de Início</label>
        <div class="campo vermelho">
          01/01/2010
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4 borda">
        <label>Dia da Semana</label>
        <div class="campo vermelho">
          02/02/2020
        </div>
      </div>
      <div class="col-4 borda">
        <label>Horário
        </label>

        <div class="campo vermelho">
          08:00 às 12:00
        </div>
      </div>
      <div class="col-4 borda">
        <label>Carga Horária
        </label>
        <div class="campo vermelho">
          264 Horas
        </div>
      </div>
    </div>
    <div class="row">&nbsp<br>
      <div class="col-12">
        <p class="h6 text-center">Caratinga, {{ strftime('%A, %d de %B de %Y', strtotime('today')) }}</p><br><br>
        <p class="h6 text-center"><hr align="center" width="400" size="1" color=black></p>
        <p class="h6 text-center">{{ $precontrato->nome_aluno }}</p>
      </div>
    </div>
  </div>

</body>
</html>