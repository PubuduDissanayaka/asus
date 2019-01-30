@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('layouts.slide')
</div>
    <br>
    <a href="/catagory/create">
        <button class="btn btn-info">Create Page</button>
    </a>
    <br>
    <div class="container">
        
        @if (count($data)>0)
        <div class="row">
        @foreach ($data as $data)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <a href="catagory/{{$data->id}}">
                                <h5 class="card-title">{{$data->name}}</h5>
                            </a>
                            
                        <p class="card-text">{{$data->created_at}}</p>
                        {{-- <a href="catagory/{{$data->id}}" class="card-link">Read more</a> --}}
                        </div>
                    </div>
                    <br>
                </div>
                
                @endforeach
        </div>
        
        @else
            <h2>no data</h2>
        @endif
        
        </div>
    </div>
@endsection


