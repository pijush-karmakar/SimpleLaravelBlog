@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Update Category: {{ $category->name }}</div>

    <div class="card-body">

        <form action="{{route('category.update',['id' => $category->id])}}" method="post"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="name">Title</label>
           	  	 <input type="text" name="name" value="{{ $category->name }}" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Update Category</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection