@extends('layouts.admin.app')
@section('title')
    <title>Admin</title>
@endsection

@push('style')
    
@endpush
@section('content')
<h1>Edit Post</h1>
<div class="bg-white pl-4 pr-4 pt-2 pb-2 overflow-hidden shadow p-3 mb-5 mt-3 bg-white rounded">
       
    <div class="float-left offset-md-1 mt-4">
        <img src="{{$post->photo ? $post->photo->file : 'https://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded" height="150" width="150">
    </div>
    <div class="float-right col-9">
    {!! Form::model($post,['method' => 'PATCH', 'action' => ['AdminPostsController@update',$post->id], 'class' => 'form-horizontal','files'=>true]) !!}
    
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>

    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id',$categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('category_id') }}</small>
    </div>

    <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('photo_id') }}</small>
    </div>


    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::submit('Update Post', ['class' => 'btn btn-info btn-block']) !!}
        </div>
            
            {!! Form::close() !!}
            <div class=" col-sm-6">
            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}
            
            
            {!! Form::submit('Delete Post', ['class' => 'btn btn-danger btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
             
    </div>
   
</div>
@endsection