@extends('ACL.acl')
@section('wrapper')
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="{{ asset('/') }}">Sis<b>IE</b>Ctga</a>
  </div>
  <div class="lockscreen-name">
    Insira nome de usuário e senha
  </div>
  {!! Form::open(['action' => 'ACL\usuariosController@FazerLogin', 'method' => 'post', 'class' => 'lockscreen-credentials']) !!}
  <div class="lockscreen-item">
    <div class="input-group">
      {!! Form::text('_usuario', null, ['class' => 'form-control', 'placeholder' => 'Usuário']) !!}
    </div>
  </div>
  <div class="lockscreen-item">
    <div class="input-group">
      {!! Form::password('_senha', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
      <div class="input-group-btn">
        {!! Form::button("<i class='glyphicon glyphicon-arrow-right'></i>", ['type' => 'submit', 'class' => 'btn']) !!}
      </div>
    </div>
    {!! Form::close() !!}
  </div>

@include('inc.errors')

  <div class="row">
    <div class="text-center">
      <a href="/recuperarsenha">Recuperar senha</a>
    </div>
  </div>

</div>

@endsection