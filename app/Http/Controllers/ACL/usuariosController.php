<?php

namespace App\Http\Controllers\ACL;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Mail\emailRecuperarSenha;
use App\Models\ACL\Usuarios;
use App\Classes\aclClasse;

class usuariosController extends Controller
{
//================================================================ INDEX
   public function index()
   {
      if (!Session::has('esta_logado'))
      {
         return $this->Entrar();
      }
      else
      {
        return redirect()->action(
          // 'Consultor\precontratosController@index'
          'Gerenciamento\dashboardController@index'
        );
         // return view('Gerenciamento.Dashboard.index');
      }
   }
//================================================================ ENTRAR
   public function Entrar()
   {
      return view('ACL.entrar');
   }

//================================================================ ENTRAR
   public function FazerLogin(Request $request)
   {
      $this->validate($request, [
         '_usuario'  => 'required',
         '_senha'    => 'required'
      ]);

      $usuario = Usuarios::where('usuario', $request->_usuario)->first();

      if (count($usuario)==0)
      {
         $errors_bd = ['Essa conta de usuário não existe.'];
         return view('ACL.entrar', compact('errors_bd'));
      }

      if (!Hash::check($request->_senha, $usuario->senha))
      {
         $errors_bd = ['A senha está incorreta.'];
         return view('ACL.entrar', compact('errors_bd'));
      }

      if ($usuario->status==0)
      {
         $errors_bd = ['O usuário está desativado. Contate o administrador.'];
         return view('ACL.entrar', compact('errors_bd'));
      }

      Session::put('esta_logado', 'sim');
      Session::put('usuario', $usuario);

      return redirect('/');
   }

//=====================================================================================================
   public function FazerLogout()
   {
      Session::flush();

      return redirect('/');
   }

//=====================================================================================================
   public function frmRecuperarSenha()
   {
      return view('ACL.recuperarsenha');
      //
   }
//=====================================================================================================
   public function exeRecuperarSenha(Request $request)
   {
      $this->validate($request, [
         '_email'  => 'required|email'
      ]);

      $usuario = Usuarios::where('email', $request->_email)->get();

      if ($usuario->count() == 0)
      {
         $errors_bd = ['O email não está associado a nenhuma conta de usuário'];
         return view('ACL.recuperarsenha', compact('errors_bd'));
      }

      $usuario = $usuario->first();

      $nova_senha = aclClasse::CiarCodigo();

      $usuario->senha = Hash::make($nova_senha);
      $usuario->save();

      Mail::to($usuario->email)->send(new emailRecuperarSenha($nova_senha));

      return redirect('/');
   }

}
