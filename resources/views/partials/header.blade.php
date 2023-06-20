<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    


    <nav class="navbar bg-dark border-bottom border-bottom-dark navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BlogForYou</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

            @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/create">Create</a>
        </li>
        @endif

            @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        @endif

      </ul>


      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->

        
        
          <a class="nav-link active text-muted" aria-current="page" href="/login">Login &nbsp;</a>
          

          @if(Auth::user())
          <a class="nav-link active text-muted" aria-current="page" href="/logout">Logout &nbsp;</a>
          @endif

        @if(!Auth::user())

        

          <a class="nav-link active text-muted" aria-current="page" href="/register">Register</a>

        @endif
        
      </form>
    </div>
  </div>
</nav>