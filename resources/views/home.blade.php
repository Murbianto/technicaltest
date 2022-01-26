@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">

        <div class="row">
                    <div class = "col-2">
                  
                   <a href="{{url('addData')}}"> <button type="button" class="btn btn-primary" >
                        Add Data
                    </button>
                   </a>
                    </div>
                    <div class = "col-2">
                  
                   <a href="{{url('exportData')}}"> <button type="button" class="btn btn-success">Export All</button>
                   </a>
                    </div>
        </div>
        </br>
        
            <div class="card">
               
                <div class="card-header">{{ __('List Data Karyawan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 

                   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Gender</th>
      <th scope="col">No Hp</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employees as $key =>$value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->name}}</td>
      <td>
      @if($value->gender ==1)  
      {{'Lak-laki'}}
      @else
      {{'Perempuan'}}
      @endif
      </td>
      <td>{{$value->no_hp}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->salary}}</td>
      <td><img src="{{asset($value->photo)}}" height="75" width="75" alt="" /></td>
   
      <td>
        <a href="{{url('editemployees/'.$value->id)}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>edit</button></a>
        <a href="{{url('deleteemployees/'.$value->id)}}"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>delete</button></a> 
        <a href="{{url('exportperemployee/'.$value->id)}}"><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>export</button></a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                   <!--  -->
                </div>
            </div>
        </div>

  
    </div>
</div>
@endsection
