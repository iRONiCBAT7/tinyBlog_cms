

@extends('partials.main')

@push('title')
  
<title>Login </title>
  
@endpush


@section("main-section")



<br> <br> 
@if ($errors->any())
	<div class="text-danger">
		<ul>
			@foreach($errors->all() as $error)

              <li> {{$error}}</li>

			@endforeach
		</ul>
	</div>

@endif

<div class="container">
	<div class="text-center"></div>

	<form action="{{ url('login')}}" method="POST">
	@csrf 
	<!-- <pre>
		@php

			print_r($errors->all());

		@endphp
	</pre> -->

		<br>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" placeholder="Enter email" 
			aria-describeby="helpId"  value="{{old('email')}}" />
		</div>
		<br>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" 
			aria-describeby="helpId" />
		</div>
		<br>
	

		<!-- <br> -->
		<button class="btn btn-primary">Login</button>

	</div>
</form>

</div>

@endsection