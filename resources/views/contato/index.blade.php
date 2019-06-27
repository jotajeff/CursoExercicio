@extends('layout.site')

@section('titulo','Lista de contatos  ::')


@section('conteudo')

		<table align="center" border="1" cellpadding="10" class="table-striped">

			<thead>

				<tr><th colspan="2">Contatos</th></tr>

			</thead> 
			
		@foreach($contatos as $contato)

		<tr>
		<td>{{ $contato->nome }}</td>t
		<td>{{ $contato->tel }}</td>
		</tr>

		@endforeach

		</table>

@endsection

