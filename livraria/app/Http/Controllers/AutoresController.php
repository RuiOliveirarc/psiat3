<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    public function index(){
    	$autores = Autor::paginate(4);

    	return view ('autores.index', [
    		'autores'=>$autores
    	]);
    }


    public function show (Request $request){
//opção 2
    	$idAutor=$request->id;

    	$autor=Autor::find($idAutor);

    	return view('autores.show', [
    			'autor'=>$autor
    	]);
    }
}
