<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OlaMundoModel;

class OlaMundoControler extends Controller
{
   public function index(){

   		$contatos = [

   			(object) ["nome"=>"Maria","tel"=>"65 9203 4321"],
   			(object) ["nome"=>"joacil","tel"=>"65 9911 4444"],
   			(object) ["nome"=>"gloria","tel"=>"65 9153 4854"],
   			  			
   		];

   		/**
   		#acessando a model  - opção 01 -  ou importa use igual está em cima		 

   		$contato = new \App\OlaMundoModel();
   		dd($contato->lista());
   		*/
   	
   		$contato = new OlaMundoModel();
   		dd($contato->lista());
   		//dd($contato->lista()->nome);    buscando só o nome

   		return view('viewMundo.index',compact('contatos'));
   		// viewMundo = pasta
   		// index = arquivo criado... index.blade.php
   }

    public function criar(Request $recebeParm){
    	dd($recebeParm->all());
   		return "Esse é o criar controler -  do OlaMundoControler";
   }
  
    public function editar(){
   		return "Esse é o editar controler -  do OlaMundoControler";
   }
}
