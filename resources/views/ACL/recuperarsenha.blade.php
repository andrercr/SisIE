@extends('acl.acl')
@section('wrapper')
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="{{ asset('/') }}">Sis<b>IE</b>Ctga</a>
  </div>
  <div class="lockscreen-name">
    Digite o E-Mail
  </div>
  <div class="lockscreen-item">




    {!! Form::open(['action' => 'ACL\usuariosController@exeRecuperarSenha', 'class' => 'lockscreen-credentials']) !!}
    <div class="input-group">
      {{ Form::text('_email', null, array('class' => 'form-control')) }}

      <div class="input-group-btn">
        {{ Form::button("<i class='glyphicon glyphicon-envelope'></i>", array('type'=>'submit', 'class'=>'btn')) }}
      </div>
    </div>
    {!! Form::close() !!}
  </div>

@include('inc.errors')

  <div class="help-block text-center">
    Digite o e-Mail para iniciar a recuperação de Senha
  </div>

  <div class="text-center">
    <a href="/">Voltar</a>
  </div>

</div>
@endsection

