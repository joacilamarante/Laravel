



	
	<!--tags html nos includes-->
@include('layout._includes.cabecalho')
	
	<div class="container">
		<h3 align="center">Editando Cursos</h3>
		<div class="row">
			<form class="" action="{{ route('admin.cursos.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field()}} <!-- token para funcionar o formulario, criar um input escondido com token -->
			
				
			<input type="hidden" name="_method" value="put">

			<!--formulario -->
			@include('admin.cursos._form')

			<button class="btn deep-orange">Atualizar</button>
				
			</form>			
	    </div>	        
	</div>
	
	

@include('layout._includes.footer')
