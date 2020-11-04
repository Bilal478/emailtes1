@extends('layouts.admin.app')

@section('title')
    <title>Admin</title>
@endsection

@section('content')
    <h1>Create User</h1>
    <div class=" pl-4 pr-4 pt-2 pb-2 shadow p-3 mb-5 mt-3 bg-white rounded">
    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'class' => 'form-horizontal','files' => true]) !!}

   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
   {!! Form::label('name', 'Name:') !!}
   {!! Form::text('name', null, ['class' => 'form-control', ]) !!}
   <small class="text-danger">{{ $errors->first('name') }}</small>
   </div>

   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null,['class' => 'form-control', ]) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>

    <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
    {!! Form::label('number', 'Cell Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control', ]) !!}
    <small class="text-danger">{{ $errors->first('number') }}</small>
    </div>

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id',['' => 'Chose Option']+$roles, null, ['class' => 'form-control', ]) !!}
    <small class="text-danger">{{ $errors->first('role_id') }}</small>
    </div>

    <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
    {!! Form::label('photo_id', 'Profile Photo') !!}
    {!! Form::file('photo_id', ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('photo_id') }}</small>
    </div>

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('is_active', 'Status:') !!}
    {!! Form::select('is_active',array(1 => 'Active',0 => 'Not Active' ),0, ['class' => 'form-control', ]) !!}
    <small class="text-danger">{{ $errors->first('status') }}</small>
    </div>


    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>

   {!! Form::submit('Create User', ['class' => 'btn btn-info pull-right']) !!}
    
    {!! Form::close() !!}

</div> 
@endsection