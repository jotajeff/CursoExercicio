@extends('layout.site')

@section('titulo','Lista de Cursos ')

@section('conteudo')

<div class="container z-depth-2">

	<div class="row">

		<div class="col s12 m12 l12"> 

			<h4>Lista de Cursos </h4>

			<table class="highlight responsive-table centered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>Publicado</th>
						<th>Ação</th>
					</tr>

				</thead>
				<tbody>

					@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->titulo }}</td>
						<td>{{ $registro->descricao }}</td>
						<td><img width="90" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
						<td>{{ $registro->publicado }}</td>

						<td>
							<a class="btn deep-orange waves-effect waves-light" href="{{ route('admin.cursos.editar',$registro->id) }}" alt="Atualizar"><i class="material-icons">autorenew</i></a>

							<a class="btn purple waves-effect waves-light" href="{{ route('admin.cursos.deletar',$registro->id) }}" alt="Excluir"> <i class="material-icons">delete</i></a> 
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>

		</div>

		<div class="row" style="margin: 20px;">
			<a class="btn blue waves-effect waves-light" href="{{ route('admin.cursos.adicionar') }}"> <i class="material-icons right">add_box</i>Adicionar</a>
		</div>




	</div>
	<!-- fim row -->

<span class="center"><strong>{{Auth::User()->name}} / {{Auth::User()->id}}</strong></span>


</div>
<!-- fim contaner -->

@endsection
