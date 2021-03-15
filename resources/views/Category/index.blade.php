@extends('layouts.app')

@section('content')
<div class="container">   
    <div class="row justify-content-center mt-4">
       <div class="col-md-8">
            <h3><b>Categories : {{ $category->name }} </b></h3>
            <div class="card">                        
                @foreach ($category->posts as $post)
                    <div class="card-header">
                      <h3>{{ $post->title }}</h3>
                    </div>                                  
                    <div class="card-body">
                       <p>{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
