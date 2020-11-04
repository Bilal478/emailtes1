@extends('layouts.admin.app')

@section('title')
    <title>Admin</title>
@endsection

@section('content')
    <h1>Edit User</h1>
    <div class="bg-white pl-4 pr-4 pt-2 pb-2 overflow-hidden shadow p-3 mb-5 mt-3 bg-white rounded">
       
        <div class="float-left offset-md-1 mt-4">
            <img src="{{$user->photo ? $user->photo->file : 'https://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded" height="150" width="150">
        </div>
        <div class="float-right col-9">
            {!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update',$user->id],'files' => true]) !!}

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
             {!! Form::select('role_id',$roles, null, ['class' => 'form-control', ]) !!}
             <small class="text-danger">{{ $errors->first('role_id') }}</small>
             </div>
         
             <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
             {!! Form::label('photo_id', 'Profile Photo') !!}
             {!! Form::file('photo_id', ['class' => 'form-control'],null) !!}
             <small class="text-danger">{{ $errors->first('photo_id') }}</small>
             </div>
         
             <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
             {!! Form::label('is_active', 'Status:') !!}
             {!! Form::select('is_active',array(1 => 'Active',0 => 'Not Active' ),null, ['class' => 'form-control', ]) !!}
             <small class="text-danger">{{ $errors->first('status') }}</small>
             </div>
         
         
             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 {!! Form::label('password', 'Password:') !!}
                 {!! Form::password('password',['class' => 'form-control']) !!}
                 <small class="text-danger">{{ $errors->first('password') }}</small>
             </div>
        <div class="row">
        <div class="col-sm-6">
            {!! Form::submit('Update User', ['class' => 'btn btn-info btn-block']) !!}
        </div>
            
            {!! Form::close() !!}
            <div class=" col-sm-6">
            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
            
            
            {!! Form::submit('Delete User', ['class' => 'btn btn-danger btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
             
    </div>

</div> 
@endsection