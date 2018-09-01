@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Edit Your Profile</div>

    <div class="card-body">

        <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data"> 
        
          {{ csrf_field() }}

           	  <div class="form-group">
           	  	 <label for="title">UserName</label>
           	  	 <input type="text" name="name" value="{{ $user->name }}" class="form-control">
           	  </div> 

              <div class="form-group">
           	  	 <label for="title">Email</label>
           	  	 <input type="email" name="email" value="{{ $user->email }}" class="form-control">
           	  </div>    
             
              <div class="form-group">
           	  	 <label for="title">New Password</label>
           	  	 <input type="password" name="password" class="form-control">
           	  </div> 
             
           	  <div class="form-group">
           	  	 <label for="featured">Upload Avatar</label>
           	  	 <input type="file" name="avatar" class="form-control">
           	  </div> 

           	  <div class="form-group">
           	  	 <label for="content">Facebook</label>
           	  	 <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
           	  </div> 

              <div class="form-group">
           	  	 <label for="content">LinkedIn</label>
           	  	 <input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" class="form-control">
           	  </div>  

              <div class="form-group">
           	  	 <label for="content">About You</label>
           	  	 <textarea name="about" id="" cols="30" rows="10" class="form-control">{{ $user->profile->about }}</textarea>
           	  </div>     

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Update Profile</button>
           	  </div> 

        </form>
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection