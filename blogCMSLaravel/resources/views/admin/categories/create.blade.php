@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Create New Category</div>

    <div class="card-body">

        <form action="{{route('category.store')}}" method="post"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="name">Title</label>
           	  	 <input type="text" name="name" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Store Category</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection