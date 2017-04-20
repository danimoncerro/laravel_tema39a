@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Judete</h1>
			<p>
				<a href="/counties/create" class="btn btn-success">
					Adauga
				</a>
			</p>

			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Numele</th>
					<th>Actions</th>
				</tr>

				@foreach($counties as $county)
					<tr>
						<td>{{ $county->id }}</td>
						<td>
							<a href="/counties/{{ $county->id }}">
								{{ $county->name }}
							</a>
						</td>
						<td>
							<a href="/counties/{{ $county->id }}/edit" class="btn btn-primary">
								Editeaza
							</a>
							<a href="/counties/{{ $county->id }}/delete" class="btn btn-danger">
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

