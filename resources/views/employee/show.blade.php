@extends('layouts.app')
@section('content')
<h1>{{$employee->first_name}}</h1>
<h1>{{$employee->last_name}}</h1>
<h1>{{$employee->company}}</h1>
<h1>{{$employee->email}}</h1>
<h1>{{$employee->phone}}</h1>
<hr>
  <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-success btn-block">Edit</a>
  <div class="col-sm-6">
      {!!Form::open(['route'=>['EmployeeController.destroy',$employee->id],'method'=>'DELETE']) !!}
      {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
      {!!Form::close()!!}
  </div>
  </div>

</div>
@stop
