@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-bordered table-condensed">
            	<tr>
            		<th>ID</th>
            		<th>Photo Name</th>
            		<th>Image</th>
            		<th>Action</th>
            	</tr>            	
            	@foreach ($images as $image)            		            	
            	@php
            		$i=1;
            	@endphp
            	<tr>
            		<td>{{ $i++ }}</td>
            		<td>{{ $image->title }}</td>
            		<td><img src="{{ $image->image }}" alt=""></td>
            		<td>
            			<a href="" class="btn btn-sm btn-success">Edit</a>
            			<a href="" class="btn btn-sm btn-danger">Edit</a>            			
            		</td>
            	</tr>
            	@endforeach
            </table>
        </div>
    </div>
</div>
@endsection
