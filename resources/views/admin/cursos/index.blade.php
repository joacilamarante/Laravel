




	
	<!--tags html nos includes-->
@include('layout._includes.cabecalho')
	
	<div class="container">
		<h3 align="center">Lista de Cursos</h3>
		<div class="row">	
	      <div class="col s1">Id</div>
	      <div class="col s1">Título</div>
	      <div class="col s1">Descrição</div>
	      <div class="col s1">Imagem</div>
	      <div class="col s1">Publicado</div>
	      <div class="col s1">Ação</div>	
	     </div>	        
	</div>
	
@foreach ($registros as $registro)
	<tr>
		<td>{{ $registro->id }}</td>
		<td>{{ $registro->titulo }}</td>
		<td>{{ $registro->descricao }}</td>
		<td><img width="120" src="{{ asset($registro->image) }}" alt="{{ $registro->titulo }}"></td>
		<td>{{ $registro->Publicado }}</td>
		
	</tr>
@endforeach

<div class="row">
	<a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
</div>

	

@include('layout._includes.footer')
