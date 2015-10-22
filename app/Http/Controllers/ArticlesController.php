<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = Article::latest('published_at')->published()->get();
    	return view('articles.index')->with('articles', $articles);
    }

    public function show($id){
    	$article = Article::findOrFail($id);
    	//dd($article->published_at);
    	return view('articles.show')->with('article', $article);
    }

    public function create(){
    	return view('articles.create');
    }

    /**
     * Save a new article.
     * @param  CreateArticleRequest $request Type hinted
     * @return Response
     */
    public function store(CreateArticleRequest $request){

    	// Write to database
    	Article::create($request->all());
    	return redirect('articles');
    }
}
