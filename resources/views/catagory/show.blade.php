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
                        <button class="btn btn-danger">Back</button>
                    </a>
                    <br><br>
                {{$data->name}}
                <br>
                <p><small>{{$data->created_at}}</small></p>
                

                <form action="/catagory/{{$data->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete Catagory" class="btn btn-dark">
                </form>
                <br>
                <a href="#" class="btn btn-warning">
                    Edit Catagory
                </a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection