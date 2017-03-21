<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CursoModel;

class CursoControler extends Controller
{
    public function index(){
    	$registros = CursoModel::All();
    	return view('admin/cursos.index',compact('registros'));
    }

    public function adicionar(){
    	return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
    	$dados = $req->all();


        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'não';
        }

    	//verifica se existe a imagem
    	if($req->hasFile('image')){

    		$image = $req->file('image');
    		$num = rand(1111,9999); //gerando numero randomico para colocar na img
    		$dir = "img/cursos";
    		$ex  = $image->guessClientExtension(); //trás a extensão da img
    		$nomeImage = "image_".$num.".".$ex; //nome da imagem / numero / . / extensão
    		$image->move($dir,$nomeImage);
            $dados['image'] = $dir."/".$nomeImage;

    	}

        CursoModel::create($dados);

        return redirect()->route('admin.cursos');

    	//dd($dados);// mostra a informações do adicionar e pausa
    }

    //recebe id por parametro da route
    public function editar($id){
        $registro = CursoModel::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }


    public function atualizar(Request $req, $id){
        $dados = $req->all();


        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'não';
        }

        //verifica se existe a imagem
        if($req->hasFile('image')){

            $image = $req->file('image');
            $num = rand(1111,9999); //gerando numero randomico para colocar na img
            $dir = "img/cursos";
            $ex  = $image->guessClientExtension(); //trás a extensão da img
            $nomeImage = "image_".$num.".".$ex; //nome da imagem / numero / . / extensão
            $image->move($dir,$nomeImage);
            $dados['image'] = $dir."/".$nomeImage;

        }

        CursoModel::find($id)->update($dados);

        return redirect()->route('admin.cursos');

        //dd($dados);// mostra a informações do adicionar e pausa
    }

    public function deletar( $id){       
            
            CursoModel::find($id)->delete();
            return redirect()->route('admin.cursos');

        }
    
}
