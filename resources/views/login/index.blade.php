





	
<!--tags html nos includes-->
@include('layout._includes.cabecalho')
	
	<div class="container">
		<h3 align="center">Entrar no sistema...</h3>
		<div class="row">
			<form class="" action="{{ route('site.login.entrar') }}" method="post">
			{{ csrf_field()}} <!-- token para funcionar o formulario, criar um input escondido com token -->
			
				
			<div class="input-field">
				<!-- faz a verificação se existe o registro e adicionar ou seta vazio -->
				<input type="text" name="email"> 
				<label>E-mai</label>
			</div>

			<div class="input-field">
				<!-- faz a verificação se existe o registro e adicionar ou seta vazio -->
				<input type="password" name="senha"> 
				<label>Senha</label>
			</div>		

			<button class="btn deep-orange">Entrar</button>
				
			</form>			
	    </div>	        
	</div>
	
	

@include('layout._includes.footer')
