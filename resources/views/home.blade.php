
    <!--tags html nos includes-->
@include('layout._includes.cabecalho')
    
    <div class="container">
        <h3 align="center">Lista de Cursos</h3>
 
        <div class="row">
        @foreach($cursos as $curso)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset($curso->image) }}">
                  
                </div>
                <div class="card-content">
                  <h4>{{ $curso->titulo }}</h4>
                  <p>{{ $curso->descricao }}</p>
                </div>
                <div class="card-action">
                  <a href="#">ver mais</a>
                </div>
              </div>
            </div>
        @endforeach
        </div> 
            
    </div>
    

@include('layout._includes.footer')
