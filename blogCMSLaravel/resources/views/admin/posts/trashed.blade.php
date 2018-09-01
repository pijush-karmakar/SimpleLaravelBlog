
@extends('layouts.app')


@section('content')

<div class="card">

<div class="card-header">{{ __('Trashed Post') }}</div> 
<div class="card-body table-responsive">
<table class="table table-striped">
  <thead>
    
      
      <th>Image</th>
      <th>Title</th>
      <th>Edit</th>
      <th>Trashed</th>
      <th>Destroy</th>
    
  </thead>

  <tbody>

    @if( $posts->count() > 0 )
    @foreach($posts as $post)
    <tr>
      <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" height="50px" width="50px"></td>
      <td>{{ $post->title }}</td>
      <td>Edit</td>
      <td><a href="{{ route('post.restore',['id' => $post->id]) }}" class="btn btn-success btn-sm">Restore</a></td>
      <td><a href="{{ route('post.kill',['id' => $post->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
    @endforeach

    @else

       <tr> <th colspan="5" class="text-center">No trashed Post</th> </tr>

    @endif

  </tbody>

</table>

  </div>
</div>

@endsection