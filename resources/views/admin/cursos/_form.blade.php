


<div class="input-field">
	<!-- faz a verificação se existe o registro e adicionar ou seta vazio -->
	<input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}"> 
	<label>Título</label>
</div>


<div class="input-field">
	<input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
	<label>Descrição</label>
</div>

<div class="input-field">
	<input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
	<label>Valor</label>
</div>


<div class="file-field input-field">
	<div class="btn blue">
		<span>Imagem</span>
		<input type="file" name="image" value="{{ isset($registro->image) ? $registro->image : '' }}">
	</div>
	<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
	</div>
</div>

@if(isset($registro->image))
<div class="input-field">
	 <img width="150" src="{{ isset($registro->image) }}"> 

</div>
@endif

<div input-field>
	<p>
      <input type="checkbox" id="test5" name="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' :'' }} value="true" />
      <label for="test5">Publicar?</label>
    </p>
    <br><br>	
</div>