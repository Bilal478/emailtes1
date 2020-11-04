@extends('layouts.admin.app')
@section('title')
    <title>Admin</title>
@endsection

@push('style')
    
@endpush
@section('content')
<h1>Create Post</h1>
<div class=" pl-4 pr-4 pt-2 pb-2 shadow p-3 mb-5 mt-3 bg-white rounded">

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'class' => 'form-horizontal','files'=>true]) !!}
    
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>

    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id',array(''=>'Chose Category')+$categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('category_id') }}</small>
    </div>

    <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('photo_id') }}</small>
    </div>


    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
    </div>

    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
   
    {!! Form::close() !!}

</div>
@endsection