@extends('users.layout')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit user</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>

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

<form action="{{ route('update',$user->id) }}"  method="POST">

    @csrf
    @method('PUT')
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" value="{{ $user->nama }}" name="nama" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nim:</strong>

                <input type="text" value="{{ $user->nim }}" class="form-control"  name="nim" placeholder="Input NIM"></input>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kelas:</strong>

                <input type="text" value="{{ $user->kelas }}" class="form-control"  name="kelas" placeholder="Input Kelas"></input>

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                <input type="email"  value="{{ $user->email }}" class="form-control"  name="email" placeholder="Input Email"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

</form>

@endsection