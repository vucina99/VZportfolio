<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>VZ-Portfolio</title>
     
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	  <meta name="keywords" content="" />
	  <meta name="description" content="" />
	  <link rel="shortcut icon" href="img/logo.ico" />
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
		<link rel="stylesheet"  href="css/style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  <meta property="og:url" content="" />
	   <meta property="og:type" content="website" />
	   <meta property="og:title" content="">
	   <meta property="og:description" content="">
	   <meta property="og:image" content="img/logo.jpg"/>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>
<body data-spy="scroll" data-target=".navbar">

<nav class="navbar navbar-expand-lg border-bottom border-light fixed-top animated bounceInDown" id="navbar-example2">
	<div class="container">
  <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="logo"></a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto nav-pills">
    @if(!Auth::check())
		
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#new">New projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#comment">Comments</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#info">Info</a>
      </li>  
      @endif
     
    	@if(Auth::check())
		@if(Auth::User()->isAdmin != 1)
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#new">New projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#comment">Comments</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#info">Info</a>
      </li>  
      @endif
      @endif
      @if(Auth::check())
		@if(Auth::User()->isAdmin == 1)
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/admin-dash">ADD projects</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/allcoments">Delete comments</a>
      </li>

		@endif
      @endif  

    </ul>
    @if(!Auth::check())
 <ul class="navbar-nav ml-auto">
 	 <li class="nav-item">
        <a class="nav-link" href="/download"> CV <i class="fa fa-download"></i></a>
      </li>
 </ul>
 @endif
     @if(Auth::check())
 <ul class="navbar-nav ml-auto">
	<li class="nav-item">
                                  
      <a  href="{{ route('logout') }}"
         onclick="event.preventDefault();
           document.getElementById('logout-form').submit();" class="dugme">
             Logout <i class="fa fa-sign-out-alt"></i>
       </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                  @csrf
          </form>
       </div>
      </li>
     </ul>
 @endif
  </div>
  </div>
</nav>

@yield('content')


   
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/index.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        
    });
</script>
</body>
</html>