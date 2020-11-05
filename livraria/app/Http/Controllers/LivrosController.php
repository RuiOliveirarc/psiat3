<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function index(){
    	$livros = Livro::paginate(4);

    	return view ('livros.index', [
    		'livros'=>$livros
    	]);
    }

    public function show (Request $request){
//opção 2
    	$idLivro=$request->id;

    	$livro=Livro::find($idLivro);

    	return view('livros.show', [
    			'livro'=>$livro
    	]);


    }
}
