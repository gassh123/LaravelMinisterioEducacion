<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NoveltyController extends Controller
{
    public function index(){
        $imagen= App\Imagen::all();
    	return view ('novelty.index', compact('imagen'));
    }

    public function create(){
    	return ('aqui se crean las novedades');
    }

    public function store(){
    	//
    }

    public function edith($novelty){
    	return 'aqui se edita alhgo{$novelty}';
    	
    }
    public function update($novelty){
    	
    }
    public function destroy($novelty){
    	
    }

}