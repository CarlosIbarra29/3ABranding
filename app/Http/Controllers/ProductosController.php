<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function index(Request $request, $idProducto){
    	
    	

    	$productos= Productos::where('ID_PRODUCTO', $idProducto)->first();

    	return \View::make('productos')->with('productos', $productos);

    	
    	 //dd($productos);

    }
}
