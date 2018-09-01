
@extends('layouts.app')


@section('content')

<div class="card">

<div class="card-header">{{ __('All Users') }}</div>

<div class="card-body table-responsive">
<table class="table table-hover">
  <thead>
    
      
      <th>Image</th>
      <th>Name</th>
      <th>Permisions</th>
      <th>Delete</th>
    
  </thead>

  <tbody>
    @if( $users->count() > 0 )
    @foreach($users as $user)
    <tr>
      <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" height="50px" width="50px" style="border-radius: 50%;"></td>
      <td>{{ $user->name }}</td>
      <td>
        
@if($user->admin)
   <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove Permission</a>
 @else
 
  <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-sm btn-success">Make Admin</a>
@endif

      </td>
        
      <td>
        @if(Auth::id() !== $user->id)

        <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove User</a>

        @endif
      </td>
    </tr>
    @endforeach
       @else

       <tr> <th colspan="5" class="text-center">No User</th> </tr>

    @endif

  </tbody>
</table>

  </div>
</div>

@endsection