@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


 <div class="card">

    <div class="card-header">Edit blog settings</div>

    <div class="card-body">

        <form action="{{route('settings.update')}}" method="post"> {{-- form_start --}}
          {{ csrf_field() }}
           	  <div class="form-group">
           	  	 <label for="name">Site Name</label>
           	  	 <input type="text" name="site_name" class="form-control" value="{{ $settings->site_name }}">
           	  </div> 

              <div class="form-group">
                 <label for="name">Contact Email</label>
                 <input type="text" name="contact_email" class="form-control" value="{{ $settings->contact_email }}" >
              </div> 

              <div class="form-group">
                <label for="name">Contact Phone</label>
                <input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number }}" >
             </div> 

             <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $settings->address }}" >
             </div> 

           	  <div class="form-group">
           	  	  <button class="btn btn-success" type="submit">Update Settings</button>
           	  </div> 

        </form> {{-- form_end --}}
        
    </div> {{-- card_body --}}

</div> {{-- card --}}


@endsection