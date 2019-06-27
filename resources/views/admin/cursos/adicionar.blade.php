@extends('layout.site')

@section('titulo','Lista de Cursos ')


@section('conteudo')

	<div class="container z-depth-2">

		<div class="row">

		<div class="col s12 m12 l12"> 

			<h1> Adicionar Cursos </h1>

			<form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">

			{{ csrf_field()}}

			@include('admin.cursos._form')

			<button class="waves-effect waves-light btn-large"><i class="material-icons right">save</i>Cadastrar</button>

			</form>

			<br><br>
       		
	</div>
	<!-- fim row -->

	
	</div>
	<!-- fim contaner -->

	

@endsection
