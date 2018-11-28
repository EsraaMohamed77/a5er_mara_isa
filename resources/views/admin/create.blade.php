@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offest-2">
        <h1>create new admin Email</h1>
        <hr>

       {!! Form::open(array('Route' => 'AdminController.store')) !!}
        <label for="email">email</label>
        <input type="text" name="email" class="form-control">
    <hr>
        <label for="password">Password</label>
        <input type="password" name="password"  class="form-control" >
    <hr>



        {{ form::submit('submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
        {!! Form::close() !!}
    </div>
</div>
@stop
