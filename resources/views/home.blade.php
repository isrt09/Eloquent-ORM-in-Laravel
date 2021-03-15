@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Post</b></div>
                <div class="card-body">                   
                   <form action="{{ route('store.posts') }}" method="post">
                    @csrf
                       <div class="form-group row">
                           <label for="name">Post Title :</label>
                           <input type="text" class="form-control" name="title">
                       </div>                   
                       <div class="form-group row">
                           <label for="name">Post Description :</label>
                           <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                       </div>                   
                       <div class="form-group row">
                           <label for="name">Post Category :</label>
                           <select name="category_id" id="" class="form-control">                      
                               <option selected="" disabled="">Choose a Category</option>
                               @foreach ($categories as $category)                                                
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                               @endforeach                               
                           </select>
                       </div>                                          
                       <div class="form-group row">                           
                           <input type="submit" class="btn btn-success" value="Save">
                       </div>
                   </form>                    
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
       <div class="col-md-8">
            <h3><b>All Posts</b></h3>
            <div class="card">
                @foreach ($posts as $post)                                
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
                        <p>{{ $post->description }}</br>
                            <span><b>Author : </b>{{ Auth::user()->name }}</span>                           
                            <span><b>Category : </b>{{$post->category->name}}</span>
                        </p>
                    </div>                   
                @endforeach                                
            </div>
        </div>
    </div>
</div>
@endsection
