<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    public function index(){
    	$generos = Genero::paginate(4);

    	return view ('generos.index', [
    		'generos'=>$generos
    	]);
    }

    public function show (Request $request){
//opção 2
    	$idGenero=$request->id;

    	$genero=Genero::find($idGenero);

    	return view('generos.show', [
    			'genero'=>$genero
    	]);
    }
}
