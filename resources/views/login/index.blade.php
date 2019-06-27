@extends('layout.site')

@section('titulo','Lista de Cursos ')


@section('conteudo')

<div class="container z-depth-2">

	<div class="row">

		<div class="col s12 m12 l12"> 

			<h1> Entrar no Sistema </h1>

			<form action="{{route('site.login.entrar')}}" method="post">

				{{ csrf_field()}}

				<div class="input-field col s12 m12">
					<input type="text" name="email" autofocus>
					<label for="email">Email</label>
				</div>

				
				
				<div class="input-field col s12 m12">
					<input type="password" name="senha">
					<label for="email">Senha</label>
				</div>

				<button class="waves-effect waves-light btn-large"><i class="material-icons right">locked</i>Entrar</button>

			</form>

			<br><br>

		</div>
		<!-- fim row -->


	</div>
	<!-- fim contaner -->

	

	@endsection
