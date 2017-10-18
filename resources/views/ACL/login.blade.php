@extends('acl.acl')
@section('wrapper')
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="{{ asset('/') }}">Sis<b>IE</b>Ctga</a>
  </div>
  <div class="lockscreen-name">
    {{ $dados->nome or 'Volte e tente novamente'}}
  </div>
  <div class="lockscreen-item">
    <div class="lockscreen-image">
      <img src="painel/img/users/{{ $dados->id_usuario or '0'}}.jpg" alt="User Image">
    </div>

    {!! Form::open(['action' => 'ACL\usuariosController@FazerLogin', 'class' => 'lockscreen-credentials']) !!}
    <div class="input-group">
      {{ Form::password('_senha', array('class' => 'form-control')) }}
      {{ Form::hidden('_usuario', '$usuario') }}
      <div class="input-group-btn">
        {{ Form::button("<i class='glyphicon glyphicon-log-in'></i>", array('type' => 'submit', 'class' => 'btn')) }}
      </div>
    </div>
    {!! Form::close() !!}
  </div>

<!-- include erros -->

  <div class="help-block text-center">
    Digite a Senha para iniciar sua Sessão
  </div>
  
  <div class="row">
    <div class="text-center">
      <a href="/">Entrar com outro usuário</a><br>
      <a href="/recuperarsenha">Recuperar senha</a>
    </div>
  </div>

</div>

@endsection