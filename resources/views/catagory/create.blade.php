@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        {!! Form::open(['route' => 'catagory.store']) !!}
            <input type="text" name="catname" class="form-control" placeholder="Catagory Name" required>
            <br>
            <input type="submit" class="form-control btn btn-info" value="Create">
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4"></div>
</div>

@endsection