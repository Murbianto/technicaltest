@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">

       
        </br>
        
            <div class="card">
               
                <div class="card-header">{{ __('Add Data') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif              
                   <!--  -->
<form action="{{url('createdata')}}" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
                   <label>Nama</label>
            <input type="text" name="name" class="form-control">
            
            <label>Jenis Kelamin</label>
            <select class="form-select" name="gender" id="gender">
                <option selected>-</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
            </select>

            <label>No Hp</label>
            <input type="number" name="nohp" class="form-control">


            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        
            <label>Current Salary</label>
            <input type="number" name="salary" class="form-control">


            <label>Photo</label>
            <input type="file" id="img" name="img" accept="image/*">
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