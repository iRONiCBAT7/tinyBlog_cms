@extends('partials.main')

@push('title')

<title>Create Post </title>

@endpush


@section("main-section")

<div class="container">
	<br>
	<h3 class="text-center">Create New Post</h3>

	<form action="{{url('/create')}}" method="POST">
		
		@csrf    

		<br>
		<div class="input-group flex-nowrap ">
			<span class="input-group-text" id="addon-wrapping">Title</span>
			<input type="text" name="title" class="form-control" placeholder="Title" aria-label="title" aria-describedby="addon-wrapping">
		</div>
		<br> 

		
		<div class="form-floating">
			<textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px"></textarea>
			<label for="floatingTextarea2">Content</label>
		</div>
		

		<br> 
		<button class="btn btn-secondary" type="submit" name="user_id" value="{{ $userId }}">Create</button>
	</form>

</div>

@endsection