@extends('users.layout')

@section('content')
<div class=" mr-auto mt-5" >
    
<div class="row ">

    <div class="col-lg-12 margin-tb d-flex justify-content-center border border-white" style="margin-top: 100px;">

        <div class="pull-left ">

            <h2>Join Our Community</h2>

        </div>


    </div>

</div>

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form class="mt-3" action="{{ route('create') }}" method="POST">

    @csrf

     <div class="d-flex flex-column align-items-center">

        <div class="col-xs-6 col-sm-6 col-md-6 ">

            <div class="form-group">

                <strong class="mb-1">Name:</strong>

                <input type="text" name="name" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email" class="form-control"  name="email" placeholder="Input Email"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn bg-white text-primary">Submit</button>

        </div>

    </div>

</form>

</div>
@endsection