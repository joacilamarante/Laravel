<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OlaMundoModel extends Model
{
    public function lista(){
    	return (object)[
    		'nome'=>'guilherme',
    		'tel'=>'959595148'
    	];
    }
}
