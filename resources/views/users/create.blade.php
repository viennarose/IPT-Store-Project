@extends('base')

@section('content')
   
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-5 offset-md-2">
                    <h1>Create New User</h1>
                    {!! Form::open(['url' => '/users', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{Form::label('id', 'Select User')}}
                        {{Form::select('id', \App\User::list(), null, ['class'=>'form-control', 'placeholder' => 'Select user'] )}}
                    </div>

                    <div class="form-group">
                        {{Form::label('fullname', 'Fullname')}}
                        {{Form::text('fullname', null, ['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('username', 'Username')}}
                        {{Form::text('username', null, ['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', null, ['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('password', 'Password')}}
                        <div class="form-group">
                        {{Form::password('password', null, ['class' => 'form-control'])}}
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">
                            Create User
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