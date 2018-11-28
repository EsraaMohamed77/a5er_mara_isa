@extends('layouts.app')
@section('content')
<h1>{{$admin->email}}</h1>
<h1>{{$admin->password}}</h1>
<hr>
  <a href="{{route('AdminController.edit', $admin->id)}}" class="btn btn-success btn-block">Edit</a>
  <div class="col-sm-6">
      {!!Form::open(['route'=>['AdminController.destroy',$admin->id],'method'=>'DELETE']) !!}
      {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
      {!!Form::close()!!}
  </div>
  </div>

</div>
@stop
