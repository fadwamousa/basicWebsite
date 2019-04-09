@extends('layouts.app')
@section('title','Contact Page')
@section('content')
<h3>Contact Page </h3>
{!!Form::open(['method'=>'POST','url'=>'/contact','files'=>true])!!}


<div class="form-group">

  {{Form::label('name','Name:')}}
  {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name'])}}

</div>

<div class="form-group">

  {{Form::label('email','Email')}}
  {{Form::text('email',null,['class'=>'form-control','placeholder'=>'Enter Email'])}}

</div>

<div class="form-group">

  {{Form::label('content','Content')}}
  {{Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Enter Message'])}}

</div>

<div class="form-group">

  {{Form::submit('Send',['class'=>'btn btn-danger'])}}

</div>


{!!Form::close()!!}
@include('inc.messages')
@endsection
