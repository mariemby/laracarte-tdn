<nav class="navbar  navbar-expand-md navbar-light bg-light fixed-top justify-content-center" >
<div class="container" >
<a class="navbar-brand" href="{{route('root_path')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
   aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto" class="nav-item active">
      <li class="{{set_active_route('root_path')}}">
        <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{set_active_route('about_path')}}">
        <a class="nav-link" href="{{route('about_path')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Palnet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
          <a class="dropdown-item" href="https://larajobs.com">Laravel jobs</a>
          <a class="dropdown-item" href="https://laravel-news.com">Laravel news</a>
          <a class="dropdown-item" href="https://larachat.co">Larachat</a>
        </div>
      </li>
      <li class="{{set_active_route('contact_path')}}"> <a class="nav-link" href="{{route('contact_path')}}">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li>  <a class="nav-link" href="#">Login</a></li>
        <li><a class="nav-link" href="#">Register</a></li>
    </ul>
  </div>

</nav>