<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{

	public function index()
	{
		$registros = Curso::all();
		return view('admin.cursos.index',compact('registros'));
	}

	// Adicionar
	public function adicionar()
	{

		return view('admin.cursos.adicionar');
	}

	// Salvar no DB
	public function salvar(Request $req)
	{

		$dados = $req->all();
	// dd($dados);

		if(isset($dados['publicado'])){
			$dados['publicado']='sim';
		}else{
			$dados['publicado']='nao';
		}

		if($req->hasFile('imagem')){
			$imagem = $req->file('imagem');
			$num = rand(111111,999999);
			$dir = "img/cursos";
			$ext = $imagem->guessClientExtension();
			$nomeImagem = "imagem_".$num.".".$ext;
			$imagem->move($dir,$nomeImagem);
			$dados['imagem'] = $dir."/".$nomeImagem;
		}

		Curso::create($dados);

		return redirect()->route('admin.cursos');

	}

	//  chamada para Editar
	public function editar($id)
	{
		$registro = Curso::find($id);

		return view('admin.cursos.editar',compact('registro'));
	}

	// atualizar no DB

	public function atualizar(Request $req, $id)
	{

		$dados = $req->all();
	// dd($dados);

		if(isset($dados['publicado'])){
			$dados['publicado']='sim';
		}else{
			$dados['publicado']='nao';
		}

		if($req->hasFile('imagem')){
			$imagem = $req->file('imagem');
			$num = rand(111111,999999);
			$dir = "img/cursos";
			$ext = $imagem->guessClientExtension();
			$nomeImagem = "imagem_".$num.".".$ext;
			$imagem->move($dir,$nomeImagem);
			$dados['imagem'] = $dir."/".$nomeImagem;
		}

		Curso::find($id)->update($dados);

		return redirect()->route('admin.cursos');

	}

	// Deletar
	public function deletar($id)
	{
		Curso::find($id)->delete();
		return redirect()->route('admin.cursos');
	}

}

