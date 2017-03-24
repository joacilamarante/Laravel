 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
  	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<title>@yield('tituloTema')</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


    <header>    	
	  <nav class="deep-orange">
	    <div class="container nav-wrapper deep-orange ">
	      <a href="#!" class="brand-logo">Curso de Laravel</a>
	      <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="{{  route('site.home')  }}">Home</a></li>
	       <li><a href="{{  route('admin.cursos')  }}">Cursos</a></li>
				 <li><a href="{{  route('site.login')  }}">Login</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile">
	        <li><a href="">Home</a></li>
	        <li><a href="{{  route('admin.cursos')  }}">Cursos</a></li>
					<li><a href="{{  route('site.login')  }}">Login</a></li>
	      </ul>
	    </div>
	  </nav>
    </header>



	

    
  