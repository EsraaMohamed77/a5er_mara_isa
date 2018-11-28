@extends('layouts.app')
@section('content')
<a href="{{ route('company.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">add new comapny</a>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>id</th>
        <th>name</th>
        <th>website</th>
        <th>email</th>
        <th>logo</th>

      </thead>

      <tbody>

        @foreach ($companies as $company)

          <tr>
            <th>{{ $company->id }}</th>
            <td>{{ $company->name }}</td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->website }}</td>
            <td>{{ $company->logo }}</td>

          </tr>

        @endforeach

      </tbody>
    </table>

    <div class="text-center">
      {!! $companies->links(); !!}
    </div>
  </div>
</div>
@stop
