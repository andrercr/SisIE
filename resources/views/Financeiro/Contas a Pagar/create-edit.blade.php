@extends('template')

@section('content-header')
<section class="content-header">
  <h1>{{ $dados_pagina->mapa or 'Pré-Contrato'}}
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Consultor</a></li>
    <li class="active">Pré-Contrato</li>
  </ol>
</section>
@endsection

@section('content')
<section class="content">
  @if( isset($precontrato))
  {!! Form::model( $precontrato, [ 'route' => [ 'precontratos.update', $precontratos->id_precontrato] , 'class' => 'form', 'method' => 'PUT', 'oninput' => 'vlrliqcurso();' ]) !!}
  @else
  {!! Form::open([ 'route' => 'precontratos.store', 'class' => 'form', 'oninput' => 'vlrliqcurso();']) !!}
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Instituto Embelleze Caratinga</h3>
        </div>
        <div class="box-body">
          <div class="form-group col-md-9">
            {{ Form::label('Consultor') }}
            {{ Form::text('nome_consultor', session('usuario')->nome_display, ['class' => 'form-control', 'disabled']) }}
            {{ Form::hidden('id_consultor', session('usuario')->id_usuario ) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Local') }}
            {{ Form::text('local', 'Caratinga', ['class' => 'form-control', 'placeholder' => 'Caratinga', 'disabled']) }}
            {{ Form::hidden('id_local', 1 ) }}
          </div>
          <div class="form-group col-md-9">
            {{ Form::label('Origem da Matrícula') }}
            {{ Form::text('origem_contrato', null, ['class' => 'form-control', 'placeholder' => 'Origem da Matrícula']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Data') }}
            {{ Form::date('data_cadastro2', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
            {{ Form::hidden('data_cadastro', \Carbon\Carbon::now() ) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Informações do Aluno</h3>
        </div>
        <div class="box-body">
          <div class="form-group col-md-8">
            {{ Form::label('Nome do Aluno') }}
            {{ Form::text('nome_aluno', null, ['id' => 'nome_aluno', 'class' => 'form-control', 'placeholder' => 'Nome do Aluno']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Sexo') }}
            {{ Form::select('sexo', [
            null => 'Selecione...',
            'F' => 'Feminino',
            'M' => 'Masculino',
            'X' => 'Não Informado'
            ],  null , ['id' => 'sexo', 'class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Data de Nascimento') }}
            {{ Form::date('data_nascimento', null, ['id' => 'data_nascimento', 'class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Estado Civil') }}
            {{ Form::select('estado_civil', [
            null          => 'Selecione...',
            'solteiro'    => 'Solteiro(a)',
            'casado'      => 'Casado(a)',
            'divorciado'  => 'Divorciado(a)',
            'viúvo'       => 'Viúvo(a)',
            'outro'       => 'Outro',
            ], null , ['id' => 'estado_civil', 'class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Profissão do Aluno') }}
            {{ Form::text('profissao', null, ['id' => 'profissao', 'class' => 'form-control', 'placeholder' => 'Profissão do Aluno']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Escolaridade') }}
            {{ Form::select('escolaridade', [
            null                => 'Selecione...',
            'fundamental_inc'   => 'Fundamental - Incompleto',
            'fundamental_com'   => 'Fundamental - Completo',
            'medio_inc'         => 'Médio - Incompleto',
            'media_com'         => 'Médio - Completo',
            'superior_inc'      => 'Superior - Incompleto',
            'superior_com'      => 'Superior - Completo',
            'posgraduacao_inc'  => 'Pós-graduação - Incompleto',
            'posgraduacao_com'  => 'Pós-graduação - Completo',
            ], null , ['id' => 'escolaridade', 'class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('CEP') }}<small> (Somente Números)</small>
            {{ Form::text('cep', null, array('id' => 'cep', 'class' => 'form-control cep-mask', 'placeholder' => '00000-000', 'size' => '10', 'maxlength' => '9', 'data-mask' => '00.000-000', 'data-mask-selectonfocus' => 'true', 'onblur' => 'pesquisacep(this.value);')) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Número') }}
            {{ Form::number('numero', null, ['id' => 'numero', 'class' => 'form-control', 'placeholder' => '00']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Compl.') }}
            {{ Form::text('complemento', null, ['id' => 'complemento', 'class' => 'form-control', 'placeholder' => 'Compl.']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('Logradouro') }}
            {{ Form::text('rua', null, ['id' => 'rua', 'class' => 'form-control', 'placeholder' => 'Rua', 'id' => 'rua']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Bairro') }}
            {{ Form::text('bairro', null, ['id' => 'bairro', 'class' => 'form-control', 'placeholder' => 'Bairro', 'id' => 'bairro']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Cidade') }}
            {{ Form::text('cidade', null, ['id' => 'cidade', 'class' => 'form-control', 'placeholder' => 'Cidade', 'id' => 'cidade']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Estado') }}
            {{ Form::text('uf', null, ['id' => 'uf', 'class' => 'form-control', 'placeholder' => 'UF', 'id' => 'uf']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('RG') }}<small> (Somente Números)</small>
            {{ Form::number('rg', null, ['id' => 'rg', 'class' => 'form-control', 'placeholder' => '00']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('CPF') }}<small> (Somente Números)</small>
            {{ Form::text('cpf', null, ['id' => 'cpf', 'class' => 'form-control', 'placeholder' => '000-000-000-00', 'data-mask' => '000-000-000-00', 'data-mask-selectonfocus' => 'true']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Telefone Residencial') }}
            {{ Form::text('fone_residencial', null, ['id' => 'fone_residencial', 'class' => 'form-control', 'placeholder' => '(00) 0000-0000', 'data-mask' => '(00) 0000-0000', 'data-mask-selectonfocus' => 'true']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Telefone Comercial ou Celular') }}
            {{ Form::text('fone_com_celular', null, ['id' => 'fone_com_celular', 'class' => 'form-control', 'placeholder' => '(00) 90000-0000', 'data-mask' => '(00) 90000-0000', 'data-mask-selectonfocus' => 'true']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('Nome da Mãe') }}
            {{ Form::text('nome_mae', null, ['class' => 'form-control', 'placeholder' => 'Nome da Mãe']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('e-Mail') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email@exemplo.com']) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Prestadora de Serviços</h3>
        </div>
        <div class="box-body">
          <div class="form-group col-md-12">
            <textarea class="form-control" placeholder="JAHER CURSOS E COMERCIO LTDA., EMPRESA INSCRITA NO CNPJ SOB O Nº 22.842.954/0001-84, SEDIADA NESTA CIDADE DE CARATINGA, NA RUA RAUL SOARES, 49/SALA 201 – CENTRO, DESIGNADA PRESTADORA DE SERVIÇOS E DE OUTRO LADO, O TOMADOR DE SERVIÇOS, IDENTIFICADO NO QUADRO 01, DESIGNADO (A) ALUNO." readonly></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Responsável Deste Contrato</h3>
          {{  Form::checkbox('def_respons', null, false, ['id' => 'def_respons', 'onClick' => 'def_responsaveis()']) }}
          Responsável Financeiro e Aluno são as mesmas pessoas?
        </div>
        <div class="box-body">
          <div class="form-group col-md-6">
            {{ Form::label('Nome / Empresa') }}
            {{ Form::text('nome_empresa', null, ['id'=>'nome_empresa', 'class' => 'form-control', 'placeholder' => 'Nome / Empresa']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Data de Nascimento') }}
            {{ Form::date('data_nascimento2', null, ['id' => 'data_nascimento2', 'class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Estado Civil') }}
            {{ Form::select('estado_civil2', [
            null          => 'Selecione...',
            'solteiro'    => 'Solteiro(a)',
            'casado'      => 'Casado(a)',
            'divorciado'  => 'Divorciado(a)',
            'viúvo'       => 'Viúvo(a)',
            'outro'       => 'Outro',
            ], null , ['id' => 'estado_civil2', 'class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('RG / Inscrição Estadual') }}
            {{ Form::text('rg_inscricao_estadual', null, ['id' => 'rg_inscricao_estadual', 'class' => 'form-control', 'placeholder' => 'RG / Inscrição Estadual']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('CPF / CNPJ') }}<small> (Somente Números)</small>
            {{ Form::text('cpf_cnpj', null, ['id' => 'cpf_cnpj', 'class' => 'form-control', 'placeholder' => '000-000-000-00', 'data-mask' => '000-000-000-00', 'data-mask-selectonfocus' => 'true']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Profissão') }}
            {{ Form::text('profissao2', null, ['id' => 'profissao2', 'class' => 'form-control', 'placeholder' => 'Profissão']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Escolaridade') }}
            {{ Form::select('escolaridade2', [
            null                => 'Selecione...',
            'fundamental_inc'   => 'Fundamental - Incompleto',
            'fundamental_com'   => 'Fundamental - Completo',
            'medio_inc'         => 'Médio - Incompleto',
            'media_com'         => 'Médio - Completo',
            'superior_inc'      => 'Superior - Incompleto',
            'superior_com'      => 'Superior - Completo',
            'posgraduacao_inc'  => 'Pós-graduação - Incompleto',
            'posgraduacao_com'  => 'Pós-graduação - Completo',
            ], null , ['id' => 'escolaridade2', 'class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('CEP') }}<small> (Somente Números)</small>
            {{ Form::text('cep2', null, ['class' => 'form-control', 'placeholder' => '00000-000', 'id' => 'cep2', 'size' => '10', 'maxlength' => '9', 'data-mask' => '00.000-000', 'data-mask-selectonfocus' => 'true', 'onblur' => 'pesquisacep2(this.value);']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Número') }}
            {{ Form::number('numero2', null, ['id' => 'numero2', 'class' => 'form-control', 'placeholder' => '00']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Compl.') }}
            {{ Form::text('complemento2', null, ['id' => 'complemento2', 'class' => 'form-control', 'placeholder' => 'Compl.']) }}
          </div>
          <div class="form-group col-md-6">
            {{ Form::label('Logradouro') }}
            {{ Form::text('rua2', null, ['class' => 'form-control', 'placeholder' => 'Rua', 'id' => 'rua2']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Bairro') }}
            {{ Form::text('bairro2', null, ['class' => 'form-control', 'placeholder' => 'Bairro', 'id' => 'bairro2']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Cidade') }}
            {{ Form::text('cidade2', null, ['class' => 'form-control', 'placeholder' => 'Cidade', 'id' => 'cidade2']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Estado') }}
            {{ Form::text('uf2', null, ['class' => 'form-control', 'placeholder' => 'UF', 'id' => 'uf2']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Telefone Recado / Comercial') }}
            {{ Form::text('fone_com_celular2', null, ['id' => 'fone_com_celular2', 'class' => 'form-control', 'placeholder' => '(00) 90000-0000', 'data-mask' => '(00) 90000-0000', 'data-mask-selectonfocus' => 'true']) }}
          </div>
          Obs.: Não é necessário o preenchimento do quadro acima quando o aluno for maior de idade.
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Identificação do Curso, Prazo e Duração</h3>
        </div>
        <div class="box-body">
          <div class="form-group col-md-6">
            {{ Form::label('Curso') }}
            {{ Form::select('id_curso', $cursos, null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Turma') }}
             <!-- Form::text('origem_contrato', null, ['class' => 'form-control', 'placeholder' => 'Sigla da Turma']) }} -->
            {{ Form::select('id_turma', $turmas, null , ['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Data de Início') }}
            {{ Form::date('data_inicio', null, ['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Dia da Semana') }}
            {{ Form::select('dia_semana', [
            null  => 'Selecione...',
            '1'   => 'Segunda-Feira',
            '2'   => 'Terça-Feira',
            '3'   => 'Quarta-Feira',
            '4'   => 'Quinta-Feira',
            '5'   => 'Sexta-Feira',
            '6'   => 'Sábado',
            '7'   => 'Domingo',
            ], null , ['class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Horário Início') }}
            {{ Form::time('horario_inicio', null, ['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Horário Fim') }}
            {{ Form::time('horario_fim', null, ['class' => 'form-control']) }}
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Carga Horária') }}
            {{ Form::text('carga_horaria', null, ['class' => 'form-control', 'placeholder' => 'Carga Horária']) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-{{ (isset ($precontrato)) ? 'warning' : 'success' }}">
        <div class="box-header with-border">
          <h3 class="box-title">Valor do Contrato e Condições de Pagamento</h3>
        </div>
        <div class="box-body">
          <div class="form-group col-md-2">
            {{ Form::label('Taxa de Matrícula') }}
            {{ Form::text('taxa_matricula', null, ['id' => 'taxa_matricula', 'class' => 'form-control', 'placeholder' => '000.00', 'style' => 'text-align:right', 'onKeyUp' => 'moeda(this);']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Valor da 1ª Parcela') }}
            {{ Form::text('valor_pri_parcela', null, ['id' => 'valor_pri_parcela', 'class' => 'form-control', 'placeholder' => '0000.00', 'style' => 'text-align:right', 'onKeyUp' => 'moeda(this);']) }}
          </div>
          <div class="form-group col-md-2">
            {{ Form::label('Qtd de Parcelas') }}
            {{ Form::number('qtd_parcelas', null, ['id' => 'qtd_parcelas', 'class' => 'form-control', 'placeholder' => '00']) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Dia de Venc. a partir da 2° Parcela') }}
            {{ Form::select('data_seg_parcela', [
            null  => 'Selecione...',
            '5'   => '05',
            '15'   => '15',
            '25'   => '25',
            ], null , ['class' => 'form-control']
            ) }}
          </div>
          <div class="form-group col-md-3">
            {{ Form::label('Vlr Líquido Total (Fora a matrícula)') }}
            {{ Form::text('valor_liq_curso', null, ['id' => 'valor_liq_curso', 'class' => 'form-control', 'placeholder' => '0000.00', 'style' => 'text-align:right', 'onKeyUp' => 'moeda(this);']) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Finalizar</button>
  </div>

</form>

</section>
@endsection


@push('scripts')

<script type="text/javascript" >

  function vlrliqcurso(){
    var qtd_parcelas      = parseInt(document.getElementById('qtd_parcelas').value);
    var valor_pri_parcela = parseInt(document.getElementById('valor_pri_parcela').value);
    total = qtd_parcelas * valor_pri_parcela;
    document.getElementById('valor_liq_curso').value = total;
  }

  function moeda(z){
    v = z.value;
    v=v.replace(/\D/g,"")
    //permite digitar apenas números
    v=v.replace(/[0-9]{12}/,"inválido")
    //limita pra máximo 999.999.999,99
    // v=v.replace(/(\d{1})(\d{8})$/,"$1.$2")
    //coloca ponto antes dos últimos 8 digitos
    // v=v.replace(/(\d{1})(\d{5})$/,"$1.$2")
    //coloca ponto antes dos últimos 5 digitos
    v=v.replace(/(\d{1})(\d{1,2})$/,"$1.$2")
    //coloca virgula antes dos últimos 2 digitos
    z.value = v;
  }

  function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }
  }

  function meu_callback(conteudo) {

    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua').value=(conteudo.logradouro);
      document.getElementById('bairro').value=(conteudo.bairro);
      document.getElementById('cidade').value=(conteudo.localidade);
      document.getElementById('uf').value=(conteudo.uf);
    } //end if.
    else {
      //CEP não Encontrado.
      limpa_formulário_cep();
      alert("CEP não encontrado.");
    }
  }

  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
  }

  function pesquisacep2(valor2) {

    //Nova variável "cep" somente com dígitos.
    var cep2 = valor2.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep2 != "") {

      //Expressão regular para validar o CEP.
      var validacep2 = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep2.test(cep2)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua2').value="...";
        document.getElementById('bairro2').value="...";
        document.getElementById('cidade2').value="...";
        document.getElementById('uf2').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = '//viacep.com.br/ws/'+ cep2 + '/json/?callback=meu_callback2';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

      } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep2();
        alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep2();
    }
  }

  function meu_callback2(conteudo2) {

    if (!("erro" in conteudo2)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua2').value=(conteudo2.logradouro);
      document.getElementById('bairro2').value=(conteudo2.bairro);
      document.getElementById('cidade2').value=(conteudo2.localidade);
      document.getElementById('uf2').value=(conteudo2.uf);
    } //end if.
    else {
      //CEP não Encontrado.
      limpa_formulário_cep2();
      alert("CEP não encontrado.");
    }
  }

  function limpa_formulário_cep2() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua2').value=("");
    document.getElementById('bairro2').value=("");
    document.getElementById('cidade2').value=("");
    document.getElementById('uf2').value=("");
  }

  
  function def_responsaveis() {

    if($('#def_respons').prop('checked'))
    {
      document.getElementById('nome_empresa').value           = document.getElementById('nome_aluno').value
      document.getElementById('data_nascimento2').value       = document.getElementById('data_nascimento').value
      document.getElementById('estado_civil2').value          = document.getElementById('estado_civil').value
      document.getElementById('rg_inscricao_estadual').value  = document.getElementById('rg').value
      document.getElementById('cpf_cnpj').value               = document.getElementById('cpf').value
      document.getElementById('profissao2').value             = document.getElementById('profissao').value
      document.getElementById('escolaridade2').value          = document.getElementById('escolaridade').value
      document.getElementById('cep2').value                   = document.getElementById('cep').value
      document.getElementById('numero2').value                = document.getElementById('numero').value
      document.getElementById('complemento2').value           = document.getElementById('complemento').value
      document.getElementById('rua2').value                   = document.getElementById('rua').value
      document.getElementById('bairro2').value                = document.getElementById('bairro').value
      document.getElementById('cidade2').value                = document.getElementById('cidade').value
      document.getElementById('uf2').value                    = document.getElementById('uf').value
      document.getElementById('fone_com_celular2').value      = document.getElementById('fone_com_celular').value

      document.getElementById('nome_empresa').setAttribute("readonly", true);
      document.getElementById('data_nascimento2').setAttribute("readonly", true);
      document.getElementById('estado_civil2').setAttribute("readonly", true);
      document.getElementById('rg_inscricao_estadual').setAttribute("readonly", true);
      document.getElementById('cpf_cnpj').setAttribute("readonly", true);
      document.getElementById('profissao2').setAttribute("readonly", true);
      document.getElementById('escolaridade2').setAttribute("readonly", true);
      document.getElementById('cep2').setAttribute("readonly", true);
      document.getElementById('numero2').setAttribute("readonly", true);
      document.getElementById('complemento2').setAttribute("readonly", true);
      document.getElementById('rua2').setAttribute("readonly", true);
      document.getElementById('bairro2').setAttribute("readonly", true);
      document.getElementById('cidade2').setAttribute("readonly", true);
      document.getElementById('uf2').setAttribute("readonly", true);
      document.getElementById('fone_com_celular2').setAttribute("readonly", true);
    }
    else
    {
      document.getElementById('nome_empresa').value           = ("")
      document.getElementById('data_nascimento2').value       = ("")
      document.getElementById('estado_civil2').value          = ("")
      document.getElementById('rg_inscricao_estadual').value  = ("")
      document.getElementById('cpf_cnpj').value               = ("")
      document.getElementById('profissao2').value             = ("")
      document.getElementById('escolaridade2').value          = ("")
      document.getElementById('cep2').value                   = ("")
      document.getElementById('numero2').value                = ("")
      document.getElementById('complemento2').value           = ("")
      document.getElementById('rua2').value                   = ("")
      document.getElementById('bairro2').value                = ("")
      document.getElementById('cidade2').value                = ("")
      document.getElementById('uf2').value                    = ("")
      document.getElementById('fone_com_celular2').value      = ("")

      document.getElementById('nome_empresa').removeAttribute("readonly");
      document.getElementById('data_nascimento2').removeAttribute("readonly");
      document.getElementById('estado_civil2').removeAttribute("readonly");
      document.getElementById('rg_inscricao_estadual').removeAttribute("readonly");
      document.getElementById('cpf_cnpj').removeAttribute("readonly");
      document.getElementById('profissao2').removeAttribute("readonly");
      document.getElementById('escolaridade2').removeAttribute("readonly");
      document.getElementById('cep2').removeAttribute("readonly");
      document.getElementById('numero2').removeAttribute("readonly");
      document.getElementById('complemento2').removeAttribute("readonly");
      document.getElementById('rua2').removeAttribute("readonly");
      document.getElementById('bairro2').removeAttribute("readonly");
      document.getElementById('cidade2').removeAttribute("readonly");
      document.getElementById('uf2').removeAttribute("readonly");
      document.getElementById('fone_com_celular2').removeAttribute("readonly");
    }
  }
  ;

</script>

@endpush