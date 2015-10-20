@extends('app')
@section('content')
	<h1>Articles</h1>
	<hr>
	@foreach($articles as $article)
		<article>
			<a href="{{ url('/articles', $article->id) }}"><h2>{{ $article->title }}</a></h2>
			<div class="body">
				{{ $article->body }}
			</div>
		</article>
	@endforeach
@stop