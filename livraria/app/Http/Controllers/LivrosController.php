<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function index(){
    	$livros = Livro::all();

    	return view ('livros.index', [
    		'livros'=>$livros
    	]);
    }
}
