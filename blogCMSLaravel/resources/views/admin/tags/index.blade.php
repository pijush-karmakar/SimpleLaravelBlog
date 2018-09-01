
@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header">{{ __('Tags') }}</div>

<div class="card-body table-responsive">
<table class="table table-striped">
  <thead>
    
      <th>Tag Name</th>
      <th>Editing</th>
      <th>Deleting</th>
    
  </thead>

  <tbody>
    @if( $tags->count() > 0 )
    @foreach($tags as $tag)

    <tr>

      <td> {{ $tag->tag }} </td>
      <td> <a href="{{ route('tag.edit',['id' => $tag->id] ) }}" class="btn btn-info btn-sm">
      	 Edit
      </a> </td>

      <td>  <a href="{{ route('tag.delete',['id' => $tag->id] ) }}" class="btn btn-danger btn-sm">
      	Delete
      </a> </td>

    </tr>

    @endforeach

       @else

       <tr> <th colspan="5" class="text-center">No tags yet! </th> </tr>

    @endif


  </tbody>
</table>

  </div>
</div>

@endsection