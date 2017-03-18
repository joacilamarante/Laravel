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
}
