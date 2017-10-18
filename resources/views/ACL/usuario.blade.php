@extends('acl.acl')
@section('wrapper')
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="{{ asset('/') }}">Sis<b>IE</b>Ctga</a>
  </div>
  <div class="lockscreen-name">
    Digite o Nome de Usuário ou o E-Mail
  </div>
  <div class="lockscreen-item">




    {!! Form::open(['action' => 'ACL\usuariosController@InformarSenha', 'class' => 'lockscreen-credentials']) !!}
    <div class="input-group">
      {{ Form::text('_usuario', null, array('class' => 'form-control')) }}

      <div class="input-group-btn">
        {{ Form::button("<i class='glyphicon glyphicon-arrow-right'></i>", array('type'=>'submit', 'class'=>'btn')) }}
      </div>
    </div>
    {!! Form::close() !!}
  </div>

<!-- include erros -->

  <div class="help-block text-center">
    Digite o Usuário ou e-Mail para iniciar o Login
  </div>

  <div class="text-center">
    <a href="/recuperarsenha">Recuperar senha</a>
  </div>

</div>
@endsection

