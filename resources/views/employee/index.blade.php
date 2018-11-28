@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All employee</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('employee.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">add new employee</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>id</th>
					<th>first_name</th>
					<th>lastname</th>
					<th>Company</th>
					<th>email</th>
          <th>phone</th>
				</thead>

				<tbody>

					@foreach ($employee as $employees)

						<tr>
							<th>{{ $employee->id }}</th>
							<td>{{ $employee->first_name }}</td>
              <td>{{ $employee->last_name }}</td>
              <td>{{ $employee->company }}</td>
              <td>{{ $employee->email }}</td>
              <td>{{ $employee->phone}}</td>

						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!! $employee->links(); !!}
			</div>
		</div>
	</div>
@stop
