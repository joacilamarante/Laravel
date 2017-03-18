
@extends('layout.MasterPage')
@section('tituloTema','Titulo Pagina Dinamico')



@section('conteudoDinamico')	
	
	
	@foreach ($contatos as $contato)
		<p>{{ $contato->nome }}</p>
		<p>{{ $contato->tel }}</p>
		
	@endforeach
	
@endsection
	
