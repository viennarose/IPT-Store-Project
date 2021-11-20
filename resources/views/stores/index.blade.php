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
    <a href="{{url('/stores/create')}}" class="btn btn-primary"> Add New Store</a>
</div>
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Stores</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>Store Id</th>
                        <th>Store Name</th>
                        <th>Location</th>
                        <th>Owner</th>
                        <th>Net Worth</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($stores as $str)
                    <tr class="fs-5">
                        <td>{{$str->id}}</td>
                        <td>{{$str->name}}</td>
                        <td>{{$str->location}}</td>
                        <td>{{$str->owner}}</td>
                        <td>{{$str->net_worth}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection