@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">

       
        </br>
        
            <div class="card">
               
                <div class="card-header">{{ __('Edit Data') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                  
<form action="{{url('updatedata')}}" method="post">
{!! csrf_field() !!}
            <input type="hidden" name="id" class="form-control" value="{{$employees->id}}">
                   <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{$employees->name}}">
               
            <label>Jenis Kelamin</label>
            <select class="form-select" name="gender" id="gender">

              
                @foreach($gender as $data)
                    <option value="{{ $data->id }}" {{$employees->gender == $data->id  ? 'selected' : ''}}>{{ $data->name}}</option>
                @endforeach
            </select>

            <label>No Hp</label>
            <input type="number" name="nohp" class="form-control" value="{{$employees->no_hp}}">


            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$employees->email}}">
        
            <label>Current Salary</label>
            <input type="number" name="salary" class="form-control" value="{{$employees->salary}}">


            <label>Photo</label>
            <input type="file" id="img" name="img" accept="image/*" value="{{$employees->photo}}">
</br>
</br>
            <button type="submit" class="btn btn-primary" >
                        Submit
                    </button>
</form>
            <!--  -->
            
                </div>
            </div>
        </div>

    </div>
</div>

@endsection