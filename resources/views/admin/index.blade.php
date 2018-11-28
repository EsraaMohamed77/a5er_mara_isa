@extends('layouts.app')
@section('content')
<a href="{{ route('AdminController.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">add new admin</a>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>id</th>
        <th>Email</th>
        <th>Password</th>
        </thead>

      <tbody>

        @foreach ($admins as $admin)

          <tr>
            <th>{{ $admin->id }}</th>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->password}}</td>


          </tr>
        @endforeach

      </tbody>
    </table>


  </div>
</div>
@stop
