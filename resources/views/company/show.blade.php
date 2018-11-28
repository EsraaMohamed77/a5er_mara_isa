@extends('layouts.app')
@section('content')
<h1>{{$company->name}}</h1>
<h1>{{$company->email}}</h1>
<h1>{{$company->logo}}</h1>
<h1>{{$company->website}}</h1>
<hr>
  <a href="{{route('company.edit', $company->id)}}" class="btn btn-success btn-block">Edit</a>
  <div class="col-sm-6">
      {!!Form::open(['route'=>['company.destroy',$company->id],'method'=>'DELETE']) !!}
      {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
      {!!Form::close()!!}
  </div>
  </div>

</div>
@endsection
