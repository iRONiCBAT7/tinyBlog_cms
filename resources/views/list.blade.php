@extends('partials.main')

@push('title')

<title>All List </title>

@endpush


@section("main-section")


<br>
<br>

<div class="container">
    <h3> All Posts </h3>

      <!--   <br>
        <br> -->

        @foreach($posts as $post)

        <br> <br>
        
        <div class="card" style="width: 30rem;">
          <div class="card-body">
             <h4 class="card-title">{{$post->title}}</h4>
             <p class="card-text">  {{$post->content}} </p>
             
             	@if($post->user->id == $userId)
             
             <form action="{{ url('/posts/'.$post->id)}}" method="POST">
             <a class="btn btn-success" href="{{ url('/posts/'.$post->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm my-2" type="submit">Delete</button>
            </form>
            @endif
            <a href="#" class="btn btn-primary">Read more</a>
               <div style="text-align: right;">
               <b>Username:</b><i> {{$post->user->name}}</i>
           </div>  
        </div>
    </div>
    @endforeach

</div>



@endsection