




	
	<!--tags html nos includes-->
@include('layout._includes.cabecalho')
	
	<div class="container">
		<h3 align="center">Adicionar de Cursos</h3>
		<div class="row">
			<form class="" action="{{ route('admin.cursos.salvar') }}">
			{{ csrf_field()}}
				
			</form>			
	    </div>	        
	</div>
	
	

@include('layout._includes.footer')
