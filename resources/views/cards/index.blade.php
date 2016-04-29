<!-- this page displays the games to be commented upon -->
@extends('layout')

@section('content')

	<h3>Choose your match and post a comment</h3>

	@foreach($cards as $card)

	<div>

			<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>

	</div>

	@endforeach

@stop