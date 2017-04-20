@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/cities/save" method="post">
				{{ csrf_field() }}
				<p>
					<label> Nume oras: </label>
					<input type="text" name="name" placeholder="Introduceti numele orasului">
					<br>
					<label>Id judet: </label>
					<input type="text" name="county_id" placeholder="Introduceti id-ul judetului">
				</p>
				<input type="submit" name="submit" value="Adauga oras">
			</form>
		</div>
	</div>
	</div>

@endsection