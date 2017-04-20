@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/counties/save" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $county->id }}">
				<p>
					<label> Nume judet: </label>
					<input type="text" name="name" value="{{ $county->name }}">
				</p>
				<input type="submit" name="submit" value="salveaza">
			</form>
		</div>
	</div>
	</div>

@endsection