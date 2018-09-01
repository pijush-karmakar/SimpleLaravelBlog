@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Update tag: {{ $tag->tag }}</div>

    <div class="card-body">

        <form action="{{route('tag.update',['id' => $tag->id])}}" method="post"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="name">Tag</label>
           	  	 <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Update Tag</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection