@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-3">
    <div class="card  border-info">
        <div class="card-header bg-info text-white text-center">Published Post</div>

        <div class="card-body text-center">
            <h2>{{ $post_count }}</h2>
        </div>
    </div>
</div>  

<div class="col-lg-3">
        <div class="card  border-danger">
            <div class="card-header bg-danger text-white text-center">Trashed Post</div>
    
            <div class="card-body text-center">
                <h2>{{ $trashed_count }}</h2>
            </div>
        </div>
</div>  

    <div class="col-lg-3">
            <div class="card  border-success">
                <div class="card-header bg-success text-white text-center">Users</div>
        
                <div class="card-body text-center">
                    <h2>{{ $users_count }}</h2>
                </div>
            </div>
        </div>  

        <div class="col-lg-3">
                <div class="card  border-warning">
                    <div class="card-header bg-warning text-white text-center">Categories</div>
            
                    <div class="card-body text-center">
                        <h2>{{ $categories_count }}</h2>
                    </div>
                </div>
            </div>       

</div>
@endsection
