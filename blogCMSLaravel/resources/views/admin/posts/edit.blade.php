@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header"> Update Post:  {{ $post->title }} </div>

    <div class="card-body">

        <form action="{{route('post.update',['id' => $post->id])}}" method="post" enctype="multipart/form-data"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="title">Title</label>
           	  	 <input type="text" name="title" class="form-control" value="{{ $post->title }}">
           	  </div> 

              <div class="form-group">
                 <label for="title">Select a Category</label>
                 <select name="category_id" id="category" class="form-control">

                  @foreach($categories as $category)

                    <option value="{{ $category->id }}"
                      
                       @if($post->category->id == $category->id)
                              selected 
                            @endif

                      >{{ $category->name }}</option>

                  @endforeach

                 </select>
              </div> 

              <div class="form-group">
                <label for="title">Select Tags</label>
                  @foreach($tags as $tag)
                     <div class="checkbox">
                       <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                          
                          @foreach($post->tags as $t)
                            @if($tag->id == $t->id)
                              checked
                            @endif
                          @endforeach

                        > {{ $tag->tag }} </label>
                     </div>   
                  @endforeach
              </div>

           	  <div class="form-group">
           	  	 <label for="featured">Featured Image</label>
           	  	 <input type="file" name="featured" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	 <label for="content">Content</label>
           	  	 <textarea name="content" id="" cols="20" rows="5" class="form-control">
                  {{ $post->content }}</textarea>
           	  </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Update Post</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection