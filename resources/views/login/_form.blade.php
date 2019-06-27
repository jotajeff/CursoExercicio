<div class="input-field col s12">
	<input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : '' }}" autofocus>
	<label for="email">Título</label>
</div>

<div class="input-field col s12">
	<input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : '' }}">
	<label for="email">Descrição</label>
</div>

<div class="input-field col s12">
	<input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : '' }}">
	<label for="email">Valor</label>
</div>

<br><br>

<div class="file-field input-field s12">
	<div class="btn light-blue">
		<span>Imagem <i class="material-icons right">cloud_upload</i></span>
		<input type="file" name="imagem">
	</div>
	<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
	</div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
	<img src="{{asset($registro->imagem)}}" />
</div>
@endif


<div class="input-field"> 
	<p>
      <label>
        <input type="checkbox" name="publicado" {{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked' : '' }} value="true" />
        <span>Publicar ? </span>
      </label>
    </p>
</div>