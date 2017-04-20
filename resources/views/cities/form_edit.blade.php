@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/cities/save" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $city->id }}">
				<p>
					<label> Nume oras: </label>
					<input type="text" name="name" value="{{ $city->name }}">
					<br>
					<label>Id judet: </label>
					<input type="text" name="county_id" value="{{ $city->county_id }}">
				</p>
				<input type="submit" name="submit" value="salveaza">
			</form>
		</div>
	</div>
	</div>

@endsection
