@section('title', '| Edit employee')
@section('content')

	<div class="row">

  {!! Form::model($employee, ['route' => ['employee.update', $employee->id], 'method' => 'PUT']) !!}
  <div class="col-md-8">
  {{ Form::label('first_name', 'First name:') }}
  {{ Form::text('first_name', null, ["class" => 'form-control input-lg']) }}

  {{ Form::label('last_name', 'Last name:') }}
  {{ Form::text('last_name', null, ["class" => 'form-control input-lg']) }}

  {{ Form::label('company', 'company name:') }}
  {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

  {{ Form::label('phone', 'phone:') }}
  {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

  {{ Form::label('email', 'Email :') }}
  {{ Form::text('email', null, ["class" => 'form-control input-lg']) }}
</div>
{!! Html::linkRoute('EmployeeController.show', 'Cancel', array($employee->id), array('class' => 'btn btn-danger btn-block')) !!}
{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}

{!! Form::close() !!}
</div>


@stop
