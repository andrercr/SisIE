<?php

namespace App\Classes;

class aclClasse
{
	public static function CiarCodigo()
	{
		$valor = '';
		$caracteres = 'abcdefghijklmnopqrstuvwxyz0123456789';
		for($i=0; $i<10; $i++)
		{
			$index = rand(0, strlen($caracteres));
			$valor .= substr($caracteres, $index, 1);
		}
		return $valor;
	}



}