@extends('template')

@section('content-header')
<section class="content-header">
  <h1>
    {{ $dados_pagina->mapa or 'Comissionamentos'}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Consultor</a></li>
    <li class="active">Comissões</li>
  </ol>
</section>
@endsection

@section('content')
<section class="content">
  @forelse($consultores as $consultor)
  <div class="row">
    <div class="col-md-8">
      <div class="box box-default">
        <div class="box-header">
          <h3 class="box-title"><b>{{ $consultor->nome_display }} [{{ $consultor->id_usuario }}]</b></h3>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Frente</th>
              <th style="width: 300px">Progresso</th>
              <th>Real.</th>
              <th>Meta</th>
              <th>%</th>
            </tr>
            <tr>
              <td>Quantidade de Cursos</td>
              <td style="width: 300px">
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-red" style="width: {{ $qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100}}%"></div>
                </div>
              </td>
              <td>{{ $qtdprecontr[$consultor->id_usuario] }}</td>
              <td>{{ $metas['cursos'] }}</td>
              <td><span class="badge bg-yellow">{{ number_format($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100, 1)}} %</span></td>
            </tr>
            <tr>
              <td>Valor Matrículas + 1ª Parcela</td>
              <td style="width: 300px">
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-yellow" style="width: {{ ($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100}}%"></div>
                </div>
              </td>
              <td>{{ number_format($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario], 2, ",", "." ) }}</td>
              <td>{{ number_format($metas['pri+ma'], 2, ",", "." ) }}</td>
              <td><span class="badge bg-yellow">{{ number_format(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100, 1)}} %</span></td>
            </tr>
            <tr>
              <td>Faturamento</td>
              <td style="width: 300px">
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-yellow" style="width: {{ $faturamento[$consultor->id_usuario] / $metas['fatura'] * 100}}%"></div>
                </div>
              </td>
              <td>{{ number_format($faturamento[$consultor->id_usuario], 2, ",", "." ) }}</td>
              <td>{{ number_format($metas['fatura'], 2, ",", "." ) }}</td>
              <td><span class="badge bg-yellow">{{ number_format($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100, 1)}} %</span></td>
            </tr>
            <tr>
              <td colspan="4"><strong>Média das Metas</strong></td>
              <td>{{ number_format(
                (($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
                +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
                +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3
              , 1)}} %</td>
            </tr>
            <tr>
              <td colspan="4"><strong>Comissão de Todas as Metas</strong> (média das metas divididos por 10)</td>
              <td><strong>{{ number_format(
                ((($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
                +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
                +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3)/10
              , 1)}} %</strong></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header">
          <h3 class="box-title"><b>Valores</b></h3>
        </div>
        <div class="box-body">
          <li><b>Percentuais:  </b>{{ number_format($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100, 1)}} % ,
            {{ number_format(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100, 1)}} % ,
            {{ number_format($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100, 1)}} %
          </li>
          <li><b>Média dos Percentuais:  </b>{{ number_format(
            (($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
            +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
            +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3
            , 1)}} %
          </li>
          <br>
          <li><b>Comissão de Todas as Metas:  </b>{{ number_format(
            ((($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
            +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
            +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3)/10
            , 1)}} %
          </li>
          <br>
          <li><b>Valor Matrículas + Primeira Parcela:  </b>R$ {{ number_format($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario], 2, ",", "." ) }}
          </li>
          <br>
          <h4>Comissão do Período: <b>R$
            {{ number_format((((($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
            +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
            +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3)/10)
            *($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario])/100, 2, ",", "." )}}</b>
          </h4>
          <h5>Média por Curso: <b>R$
            {{ number_format((((($qtdprecontr[$consultor->id_usuario] / $metas['cursos'] * 100)
            +(($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario]) / $metas['pri+ma'] * 100)
            +($faturamento[$consultor->id_usuario] / $metas['fatura'] * 100))/3)/10)
            *($somamatricu[$consultor->id_usuario] + $somapriparc[$consultor->id_usuario])/100
            /$qtdprecontr[$consultor->id_usuario], 2, ",", "." )
          }}</b></h5>
        </div>
      </div>
    </div>
  </div>
  @empty
  <div class="row">
    <div class="col-md-12">
      <div class="box box-default">
        <div class="box-header">
          <h3 class="box-title"><b>Não há informação a ser exibida</b></h3>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Frente</th>
              <th style="width: 300px">Progresso</th>
              <th>Real.</th>
              <th>Meta</th>
              <th>%</th>
            </tr>
            <tr>
              <td colspan="5">Não há informação a ser exibida para esse período</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  @endforelse
</section>
@endsection
