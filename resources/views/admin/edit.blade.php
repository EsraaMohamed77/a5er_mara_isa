@extends('layouts.app')
@section('content')
{!!Form::model($admin,['route'=>['AdminController.update',$admin->id]'method' => 'PUT'])!!}
{{Form::lable('name',First name)}}
{{Form::text('name',null,["class"=>'form-control input-lg'])}}

{{Form::lable('email',First name)}}
{{Form::text('email',null,["class"=>'form-control input-lg'])}}

{{Form::lable('website',First name)}}
{{Form::text('website',null,["class"=>'form-control input-lg'])}}

{{Form::lable('logo',First name)}}
{{Form::file('logo',null,["class"=>'form-control input-lg'])}}

{!! Html::linkRoute('AdminController.show', 'Cancel', array($admin->id), array('class' => 'btn btn-danger btn-block')) !!}
{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}




{!!form::close()!!}
@stop
