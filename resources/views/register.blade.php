

@extends('partials.main')

@push('title')
  
<title>Register</title>
  
@endpush


@section("main-section")

<br> <br>

<div class="container">
	<div class="text-center"></div>

	<form action="{{ url('/register')}}" method="POST">
	@csrf 
<!-- 	<pre>
		@php

			print_r($errors->all());

		@endphp
	</pre> -->


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Enter name" 
			aria-describeby="helpId" />
			<span class="text-danger">
				@error('name')
					{{ $message}}
				@enderror
			</span>
		</div>
		<br>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" placeholder="Enter email" 
			aria-describeby="helpId"  />
		</div>
		<br>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" 
			aria-describeby="helpId" />
			<span class="text-danger">
				@error('password')
					{{ $message}}
				@enderror
			</span>
		</div>
		<br>
		<!--  <div class="form-group">
			<label for="password_confirmation">Confirm password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter password" 
			aria-describeby="helpId" />
			<span class="text-danger">
				@error('password_confirmation')
					{{ $message}}
				@enderror
			</span>
		</div>  -->

		<br>
		<button class="btn btn-primary">Register</button>

	</div>
</form>

</div>





<!-- <div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" placeholder="Enter email" 
			aria-describeby="helpId"  value="{{old('email')}}" />
		</div>
 -->

@endsection