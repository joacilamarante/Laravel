




	
	<!--tags html nos includes-->
@include('layout._includes.cabecalho')
	
	<div class="container">
		<h3 align="center">Lista de Cursos</h3>
		<div class="row">
			<table>
				<thead>
					<th>Id</th>
					<th>Título</th>
					<th>Descrição</th>
					<th>Imagem</th>
					<th>Publicado</th>
					<th>Ação</th>
					
				</thead>
				<tbody>
				@foreach ($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->titulo }}</td>
						<td width="400px">{{ $registro->descricao }}</td>
						<td><img width="90" src="{{ asset($registro->image) }}" alt="{{ $registro->titulo }}"></td>
						<td>{{ $registro->publicado }}</td>
						<td>
							<a class="btn deep-orange" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>
							<a class="btn red" href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a>
						</td>
					</tr>
				@endforeach	
				</tbody>				
			</table>
	     </div>	
	     <div class="row">
			<a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
		</div>        
	</div>
	

@include('layout._includes.footer')
