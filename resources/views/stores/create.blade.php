@extends('base')

@section('content')
   
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-5 offset-md-2">
                    <h1>Create New Store</h1>
                    {!! Form::open(['url' => '/stores', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{Form::label('name', 'Store Name')}}
                        {{Form::text('name', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('location', 'Store Location')}}
                        {{Form::text('location', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('owner', 'Owner Name')}}
                        {{Form::text('owner', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('net_worth', 'Net Worth')}}
                        {{Form::number('net_worth', null, ['class' =>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">
                            Create Store

                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>
                <div class="mt-5">  
                @include('errors')
        </div>
</div>

        </div>


    
@endsection
