@extends('users.layout')

@section('content')

    <div class="row d-flex" style="margin-top: 150px;">

        <div class=" d-flex  align-items-center justify-content-center flex-column border border-white" >

            <div class="">
                <div class="">

                    <h2>Our Member</h2>
                </div>


            </div>

            

        </div>
        <div class="pull-right mt-3 mb-3 d-flex justify-content-center">

<a class="btn btn-light" href="{{ route('createForm'); }}"> Join With Us !</a>

</div>
    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered text-white">

        <tr>

            <th class="" style="width: 75px;">No</th>

            <th>Name</th>

            <!-- <th width="280px">Action</th> -->

        </tr>
        <p class="hidden" hidden>{{$i = 1}}</p>
        @foreach ($users as $user)

        <tr>

            <td>{{ $i++}}</td>

            <td>{{ $user->name }}</td>
<!-- 
            <td>

                <form action="{{ route('destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('edit',$user->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td> -->

        </tr>

        @endforeach

    </table>
 
    

@endsection