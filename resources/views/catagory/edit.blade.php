@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        {!! Form::open(['route' => ['catagory.update',$data->id]]) !!}
        <label class="form-control-label text-uppercase">Name</label>
        {{Form::text('catname',$data->name,array('class'=>"form-control"))}}
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Catagory',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4"></div>
</div>

@endsection