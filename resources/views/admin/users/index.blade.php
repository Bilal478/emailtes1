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
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
        @if ($users)

        @foreach ($users as $user)
        <tr>
            <td>{{++$i}}</td>
            <td> <img src="{{$user->photo ? $user->photo->file : 'https://placehold.it/50x50'}}" alt="" class="img-responsive img-rounded" height="50" width="50"></td>
            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->number}}</td>
            @if (isset($user->role->name))
            <td>{{$user->role->name}}</td>
            @else
            <td>Not Assigned</td>
            @endif
            
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
            
        @endif
      
    </tbody>
  </table>

@endsection

@push('script')
    
@endpush