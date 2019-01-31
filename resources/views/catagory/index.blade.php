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
                            <a href="/catagory/{{$data->id}}">
                                <h5 class="card-title">{{$data->name}}</h5>
                            </a>
                            
                        <p class="card-text">{{$data->created_at}}</p>
                        <a href="catagory/{{$data->id}}" class="card-link">Read more</a>
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
    {{-- @if (count($data)>0)
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
    @foreach ($data as $data)
    <table class="table">
            <tbody>
              <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
              </tr>
            </tbody>
          </table>
    @endforeach
    
    @else
        <h2>no data</h2>
    @endif --}}

    {{-- table start --}}
    {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          @if (count($data)>0)
              @foreach ($data as $data)
              <tbody>
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>
                            <a href="/catagory/{{$data->id}}">{{$data->name}}</a>
                        </td>
                        <td>
                            <form action="/catagory/{{$data->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" value="Delete" class="btn btn-info">
                            </form>
                        </td>
                      

                       
                    </tr>
                  </tbody>
              @endforeach
          @else
              <h2>No data</h2>
          @endif

    
            
          </table>
     --}}
@endsection


