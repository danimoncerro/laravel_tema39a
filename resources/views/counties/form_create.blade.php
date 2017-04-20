@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/counties/save" method="post">
				{{ csrf_field() }}
				<p>
					<label> Nume judet: </label>
					<input type="text" name="name" placeholder="Introduceti numele judetului">
				</p>
				<input type="submit" name="submit" value="Adauga judet">
			</form>
		</div>
	</div>
	</div>

@endsection