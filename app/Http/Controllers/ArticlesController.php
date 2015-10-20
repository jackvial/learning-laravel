<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = Article::all();
    	return view('articles.index')->with('articles', $articles);
    }

    public function show($id){
    	$article = Article::findOrFail($id);
    	//dd($article);
    	return view('articles.show')->with('article', $article);
    }

    public function create(){
    	return view('articles.create');
    }

    public function store(){

    	// Fetch all input
    	$input = Request::all();
    	return $input;
    }
}
