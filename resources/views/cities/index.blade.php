@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Orase</h1>
			<p>
				<a href="/cities/create" class="btn btn-success">
					Adauga
				</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Numele</th>
					<th>Judetul</th>
					<th>Actions</th>
				</tr>

				@foreach($cities as $city)
					<tr>
						<td>{{ $city->id }}</td>
						<td>{{ $city->name }}</td>
						<td>
							@if (isset($city->county))
								{{ $city->county->name }}
							@else 
								Nu are judet asociat. 
							@endif

						</td>
						<td>
							<a href="/cities/{{ $city->id }}/edit" class="btn btn-primary">
								Editeaza
							</a>
							<a href="/cities/{{ $city->id }}/delete" class="btn btn-danger">
								Sterge
							</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
	</div>		

@endsection
