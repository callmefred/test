<!-- Update page for notes -->

@extends('layout')


@section('content')

				<h1>Not Happy Change Your Comment</h1>

				<form method="POST" action="/notes/{{ $note->id }}">

				{{method_field('PATCH')}}

				{!! csrf_field() !!}


					<div class="form-group">

						<textarea name="body"  class="form-control">{{ $note->body}}</textarea>
						
					</div>

					<div class="form-group">

						<button type="submit" class="btn btn-primary">Update comment</button>

					</div>
				</form>

				<form method="POST" action="/notes/{{ $note->id }}">

				{{method_field('DELETE')}}
<!-- csrf is a security token -->
				{!! csrf_field() !!}

					<div class="form-group">

						<button type="submit" class="btn btn-primary">Delete Comment</button>

					</div>
				</form>

@stop