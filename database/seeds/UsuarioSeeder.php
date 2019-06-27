<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
        	'name'=>'Jota',
        	'email'=>'jotajeff@gmail.com',
        	'password'=>bcrypt('jota@2019'),
        ];

        // verifica se não existe o usuario 
        if(User::where('email','=',$dados['email'])->count()){
        	$usuario=User::where('email','=',$dados['email'])->first();

        	// se existir, ATUALIZA
        	$usuario->update($dados);
        	echo "Usuario Alterado";
        }
        	// se ñão existir , CRIA
        else{

        	User::create($dados);
        	echo "Usuario Criado";
        }
    }
}
