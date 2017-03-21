<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CursoModel;

class HomeController extends Controller
{
    

	public function index(){
		$cursos = CursoModel::All();
		return view('home',compact('cursos'));
	}

}
