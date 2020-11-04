@extends('layouts.admin.app')
@section('title')
<title>Admin</title>
@endsection
@push('style')
    <style>
    .tr-bg{background:#343a40;} 
    </style>
@endpush
@section('content')

  <h2>Users</h2>
  @include('layouts.admin.messages')
  <table class="table table-hover  shadow p-3 mb-5 mt-3 bg-white rounded">
    <thead>
      <tr class="text-white tr-bg">
        <th>Id</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
        @if ($posts)

        @foreach ($posts as $post)
        <tr>
            <td>{{++$i}}</td>
            <td><img height="50" src="{{$post->photo? $post->photo->file : 'http://placehold.it/40x40'}}" alt=""></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name:'Uncategrized'}}</td>
            <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
            <td>{{Str::limit($post->body,25)}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
            
        @endif
      
    </tbody>
  </table>

@endsection

@push('script')
    
@endpush