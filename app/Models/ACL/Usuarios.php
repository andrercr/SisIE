<?php

namespace App\Models\ACL;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Authenticatable
{
  use Notifiable;

	protected $primaryKey = 'id_usuario';
  protected $fillable   = ['nome_display', 'nome_completo','usuario', 'email', 'funcao', 'status', 'senha', ];
  protected $hidden     = ['senha', 'remember_token',];

}
