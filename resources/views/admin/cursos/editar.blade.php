@extends('layout.site')

@section('titulo','Lista de Cursos ')


@section('conteudo')

	<div class="container z-depth-2">

		<div class="row">

		<div class="col s12 m12 l12"> 

			<h1> Editando Curso </h1>

			<form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">

			{{ csrf_field()}}

			<input type="hidden" name="_method" value="put">

			@include('admin.cursos._form')

			<button class="waves-effect waves-light btn-large"><i class="material-icons right">autorenew</i>Atualizar</button>

			</form>

			<br><br>
       		
	</div>
	<!-- fim row -->

	
	</div>
	<!-- fim contaner -->

	

@endsection
