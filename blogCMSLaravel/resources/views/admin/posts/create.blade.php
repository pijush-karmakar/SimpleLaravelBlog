@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Create New Post</div>

    <div class="card-body">

        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="title">Title</label>
           	  	 <input type="text" name="title" class="form-control">
           	  </div> 

              <div class="form-group">
                 <label for="title">Select a Category</label>
                 <select name="category_id" id="category" class="form-control">

                  @foreach($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                  @endforeach

                 </select>
              </div> 

              <div class="form-group">
                <label for="title">Select Tags</label>

                @if( $tags->count() > 0 )
                  @foreach($tags as $tag)
                     <div class="checkbox">
                       <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }} </label>
                     </div>   
                  @endforeach
                @else

                <div><small>No tags yet!</small></div>
                @endif

              </div>

           	  <div class="form-group">
           	  	 <label for="featured">Featured Image</label>
           	  	 <input type="file" name="featured" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	 <label for="content">Content</label>
           	  	 <textarea name="content" id="content" cols="20" rows="5" class="form-control"></textarea>
           	  </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Store Post</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection



@section('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<script>
  
  $(document).ready(function() {
        $('#content').summernote();
    });
  
</script>

@endsection