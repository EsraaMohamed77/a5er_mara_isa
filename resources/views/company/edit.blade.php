@extends('layouts.app')
@section('content')
<form  action="{{route('company.update',$company->id)}}" method="PUT">
{{Form::lable('name',First name)}}
{{Form::text('name',null,["class"=>'form-control input-lg'])}}

{{Form::lable('email',Last name)}}
{{Form::text('email',null,["class"=>'form-control input-lg'])}}

{{Form::lable('website',Website)}}
{{Form::text('website',null,["class"=>'form-control input-lg'])}}

{{Form::lable('logo',Company Logo)}}
{{Form::file('logo',null,["class"=>'form-control input-lg'])}}

{!! Html::linkRoute('CompanyController.show', 'Cancel', array($company->id), array('class' => 'btn btn-danger btn-block')) !!}
{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}



</form>
@stop
