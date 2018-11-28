@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offest-2">
        <h1>create new company</h1>
        <hr>

       {{-- {!! Form::open(array('Route' => 'CompanyController.store','Method'=>'POST')) !!} --}}
       <form  action="{{route('company.store')}}" method="post">


        <label for="name">company name</label>
        <input type="text" name="company_name" class="form-control">
    <hr>
        <label for="email">Email</label>
        <input type="text" name="email"  class="form-control" >
    <hr>
    {{ Form::label('logo', 'Upload a company logo') }}
    {{ Form::file('logo') }}
    <hr>
        <label for="website">website</label>
        <input type="text" name="website" class="form-control">
    <hr>


        {{ form::submit('submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
        {{-- {!! Form::close() !!} --}}
        </form>
    </div>
</div>

@endsection
