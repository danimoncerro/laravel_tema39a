@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
		<div class="col-md-12">

			<h1>{{ $county->name }} ( {{ $county->cities->count() }})</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>

			@foreach ($cities as $city)
			<tr>
				<td> {{ $city->id }} </td>
				<td> {{ $city->name }} </td>
			</tr>
			@endforeach
			</table>
		</div>
</div>
</div>
@endsection