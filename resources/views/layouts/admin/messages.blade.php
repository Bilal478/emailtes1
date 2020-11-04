{{-- admin user messages --}}
@if(Session::has('user_updated'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{session('user_updated')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
@endif


@if(Session::has('user_created'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{session('user_created')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if(Session::has('user_deleted'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>{{session('user_deleted')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif