@extends('layouts.app')

@section('content')
    {{-- <div class="container-fluid">
    <h1>{{$data->name}}</h1>

    <a href="/catagory">
        <button class="btn btn-primary">Back</button>
    </a>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                    <a href="/catagory">
                        <button class="btn btn-primary">Back</button>
                    </a>
                    <br><br>
                    <h2>{{$data->name}}</h2>
                
                <br>
                <p><small>{{$data->created_at}}</small></p>
                

                {!! Form::open(['action' => ['CatagoryController@destroy',$data->id],'method' =>'POST']) !!}
                {{Form::hidden('_method','DELETE')}}
                    <button type="submit"  class="btn btn-outline-danger"><i class="fa fa-remove"></i> Delete</button>
                {!! Form::close() !!}
                <br>
                <a href="/catagory/{{$data->id}}/edit" class="btn btn-outline-info"><i class="fas fa-edit"></i> Edit</a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection