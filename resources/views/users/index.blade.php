@extends('base')
@section('content')

@if($info = Session::get('info'))
<div class="card">
    <div class="card-body bg-success text-dark">
    {{$info}}
    </div>
</div>
@endif
<div class="container">
<div class="float-right">
    <a href="{{url('/users/create')}}" class="btn btn-primary"> Add New User</a>
</div>
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Users</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Full name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($users as $usr)
                    <tr class="fs-5">
                        <td>{{$usr->id}}</td>
                        <td>{{$usr->username}}</td>
                        <td>{{$usr->fullname}}</td>
                        <td>{{$usr->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection