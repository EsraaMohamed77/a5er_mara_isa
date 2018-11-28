@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offest-2">
        <h1>create new employee</h1>
        <hr>

       <form  action="{{route('employee.store')}}" method="post">

        <label for="first_name">First name</label>
        <input type="text" name="first_name" class="form-control">
    <hr>
        <label for="last_name">Last_name</label>
        <input type="text" name="last_name"  class="form-control" >
    <hr>
        <label for="company">Company name</label>
        <input type="text" name="company" class="form-control" >
    <hr>
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    <hr>
        <label for="phone">Phone number</label>
        <input type="text" name="phone" class="form-control" >
    <hr>

        {{ Form::submit('submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
        </form>
    </div>
</div>

@stop
