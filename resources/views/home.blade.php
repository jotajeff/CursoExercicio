@extends('layout.site')

@section('titulo','Lista de Cursos ')

@section('conteudo')

<div class="container z-depth-2">

    <div class="row">

        @foreach($cursos as $curso)
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($curso->imagem)}}">
             
          </div>
          <div class="card-content">
             <h4 class="card-title">{{$curso->titulo}}</h4>
              <p>{{$curso->descricao}}</p>
          </div>
          <div class="card-action">
              <a href="#">Detalhes</a>
          </div>
          </div>
      </div>
      @endforeach
</div>
<!-- fim row -->

<!-- paginador -->

<div class="center" style="background: #cacaca;width: 100%;">
  {{$cursos->links()}}
</div>


</div>
<!-- fim contaner -->

@endsection
