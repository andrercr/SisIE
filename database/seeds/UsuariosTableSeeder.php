<?php

use Illuminate\Database\Seeder;
use App\Models\ACL\Usuarios;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuarios')->delete();

      Usuarios::create([
        'nome_display' => 'André Ramalho',
        'nome_completo' => 'André Ramalho Celestino Rocha',
        'usuario' => 'andrercr',
        'email' => 'andrercr@gmail.com',
        'funcao' => 'Sócio',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2015-08-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Hermes Celestino',
        'nome_completo' => 'Hermes Celestino da Rocha',
        'usuario' => 'hermes',
        'email' => 'rochahermes@gmail.com',
        'funcao' => 'Sócio',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2015-08-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Jesus Mário',
        'nome_completo' => 'Jesus Mário Gomes Nascimento',
        'usuario' => 'jesus',
        'email' => 'jesusmariogn@gmail.com',
        'funcao' => 'Sócio',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2015-08-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Patricia Sousa',
        'nome_completo' => 'Patricia Sousa Ramalho',
        'usuario' => 'patricia',
        'email' => 'pattysramalho@gmail.com',
        'funcao' => 'Coordenadora Pedagógica',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2015-08-07',
      ]);

      Usuarios::create([
        'nome_display' => 'Eulenia Ramalho',
        'nome_completo' => 'Eulenia Ramalho Celestino Rocha',
        'usuario' => 'eulenia',
        'email' => 'euleniaramalho@gmail.com',
        'funcao' => 'Instrutor',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2016-01-11',
      ]);

      Usuarios::create([
        'nome_display' => 'Taciane Sabino',
        'nome_completo' => 'Taciane Sabino Santos',
        'usuario' => 'taciane',
        'email' => 'financeiro.iectga@gmail.com',
        'funcao' => 'Auxiliar Administrativo',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2015-08-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Isla Soares',
        'nome_completo' => 'Isla Soares Botelho Alves',
        'usuario' => 'isla',
        'email' => 'consultor1.ietcga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2016-01-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Erica Vanessa',
        'nome_completo' => 'Erica Vanessa Lopes',
        'usuario' => 'erica',
        'email' => 'consultor2.iectga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2015-08-07',
      ]);

      Usuarios::create([
        'nome_display' => 'Helen Maria',
        'nome_completo' => 'Helen Maria Botelho Vieira',
        'usuario' => 'helen',
        'email' => 'consultor2.iectga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2015-09-30',
      ]);

      Usuarios::create([
        'nome_display' => 'Elisabete Cristina',
        'nome_completo' => 'Elisabete Cristina Dias De Oliveira',
        'usuario' => 'elisabete',
        'email' => 'consultor1.ietcga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2015-08-24',
      ]);

      Usuarios::create([
        'nome_display' => 'Carolina Monalisa',
        'nome_completo' => 'Carolina Monalisa De Paula E Silva',
        'usuario' => 'carolina',
        'email' => 'consultor2.iectga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2016-01-29',
      ]);

      Usuarios::create([
        'nome_display' => 'Alexandra Aparecida',
        'nome_completo' => 'Alexandra Aparecida Gomes Da Silva',
        'usuario' => 'alexandra',
        'email' => 'modelos.iectga@gmail.com',
        'funcao' => 'Auxiliar Pedagógico',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2016-03-06',
      ]);

      Usuarios::create([
        'nome_display' => 'Adnalva Gomes',
        'nome_completo' => 'Adnalva Gomes Da Silva Nobre',
        'usuario' => 'adnalva',
        'email' => 'modelos.iectga@gmail.com',
        'funcao' => 'Secretária',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2016-06-29',
      ]);

      Usuarios::create([
        'nome_display' => 'Diego Leonardo',
        'nome_completo' => 'Diego Leonardo Pereira Barcelos',
        'usuario' => 'diego',
        'email' => 'consultor2.iectga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2016-10-17',
      ]);

      Usuarios::create([
        'nome_display' => 'Juliana Rodrigues',
        'nome_completo' => 'Juliana Rodrigues De Oliveira',
        'usuario' => 'juliana',
        'email' => 'consultor1.ietcga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2016-11-17',
      ]);

      Usuarios::create([
        'nome_display' => 'Jessica Stefany',
        'nome_completo' => 'Jessica Stefany Dutra Pereira',
        'usuario' => 'jessica',
        'email' => 'consultor2.iectga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2016-12-15',
      ]);

      Usuarios::create([
        'nome_display' => 'Livia Sacha',
        'nome_completo' => 'Livia Sacha Gomes Pereira',
        'usuario' => 'livia',
        'email' => 'consultor3.ietcga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2017-05-30',
      ]);

      Usuarios::create([
        'nome_display' => 'Luciley Almeida',
        'nome_completo' => 'Luciley De Almeida Caetano',
        'usuario' => 'luciley',
        'email' => 'modelos.iectga@gmail.com',
        'funcao' => 'Auxiliar Pedagógico',
        'senha' =>  Hash::make('123456'),
        'status' => '1',
        'created_at' => '2017-06-19',
      ]);

      Usuarios::create([
        'nome_display' => 'Kelly Anny',
        'nome_completo' => 'Kelly Anny Coura Furtado',
        'usuario' => 'kelly',
        'email' => 'consultor3.ietcga@gmail.com',
        'funcao' => 'Consultor',
        'senha' =>  Hash::make('123456'),
        'status' => '0',
        'created_at' => '2017-08-07',
      ]);
    }
}
