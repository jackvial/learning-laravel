@extends('app')
@section('content')
<h1>About Me {{ $first }} {{$last}}</h1>
<p>
	will load all of Bootstrap's jQuery plugins onto the jQuery object. 
	The bootstrap module itself does not export anything. You can manually load Bootstrap's jQuery plugins individually by loading the /js/*.js files under the package's top-level directory.
</p>

@if(count($people))
	<ul class="list-group">
		@foreach($people as $person)
		<li class="list-group-item">
			<span class="badge">5</span>
			{{ $person }}
		</li>
		@endforeach
	</ul>
@endif
@stop