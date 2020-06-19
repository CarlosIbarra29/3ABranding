<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller

{
    
    public function index(){

    	$cat= Categorias::all();

    	return \View::make('productos')->with('cat', $cat);
    	
    	//CON CONDICION
    	// $cat=Categoria::where('NOMBRE_CATEGORIA', $NOMBRE_CATEGORIA)->first();
    	 //dd($cat);
    }


    
}
