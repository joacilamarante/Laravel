<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');;

    }


    public function entrar(Request $req){

    	$dados = $req->all();
		//dd($dados);
    	//autenticando usuário... verificando no banco - email e senha
    	if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
    		return redirect()->route('admin.cursos');
    	}

    	return redirect()->route('site.home');//rota
    }


    public function sair(){
    	Auth::logout();//sair
    	return redirect()->route('site.home');
    }
}
