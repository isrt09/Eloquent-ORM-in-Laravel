@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Post Image</b></div>               
                <div class="card-body">                   
                   <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="form-group row">
                           <label for="name">Post Title :</label>
                           <input type="text" class="form-control" name="title">
                       </div>                   
                       <div class="form-group row">
                           <label for="photo">Photo Image :</label>
		                    <input type="file" name="image" class="form-control">
                       </div>                                                                                
                       <div class="form-group row">                           
                           <input type="submit" class="btn btn-success" value="Save">
                       </div>
                   </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

