@extends('content')
@section('content')
<header class="text-center" id="home"> 
	<div class="radi" >
	<div class="opacity border border-light animated bounceInLeft">
	<h1>Vuk Zdravkovic</h1><br>
	<h2>Web Developer - Expert in Laravel <i class="fab fa-laravel"></i> / Bootstrap <i class="fab fa-bootstrap"></i></h2>
	</div>
	</div>
</header>

<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
	<a id="button"><i class="fa fa-arrow-up"></i></a>
	<div id="about"></div> 
	<div class="container " >
		<h2 class="belo text-center" >About me</h2>
		<div class="row">
			<div class="col-lg-6 col-md-6 text-center"><img src="img/ja.jpg" alt="Ja"></div>
			<div class="col-lg-6 col-md-6 text-center">
				<p>I’m a <strong>Front-end</strong> and <strong>Back-end</strong> developer from Serbia with 4 years of experience. I have a bachelor's degree in Computer Science. <br><br>

				Over the last 4 years, I’ve worked on various projects - from basic HTML, custom Bootstrap themes, through to large projects in Laravel.<br><br>

				My focus is to deliver a clean and reusable code and I enjoy to solve your problems.<br><br>

				<strong>My skills:</strong><br>
				- Laravel framework<br>
				- PHP<br>
				- Mysql<br>
				- JavaScript(Jquery)<br>
				- Bootstrap framework, Materialize<br>
				- HTML<br>
				- CSS(Sass,Less)<br><br>

				I'm responsible and my goal will always be to meet your needs and deadline. I Fast learner and I always ready to learn something new from projects.<br>

				<strong>Looking forward to working with you!</strong></p>
			</div>
		</div>
	</div>
	<br><br><br><br>
	<div id="projects"></div>
	<div class="p">
	<div class="container " >
		<h2 class="belo1 text-center" > Projects</h2>
		<div class="row ">
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 pb-4 text-center">
				<div class="hovereffect">	
					<img src="img/slika.png" alt="" class="img-fluid" >

				        <div class="overlay">
		           <h2 class="font-weight-bold">Blog website</h2>
		           <a class="info" href="#" data-toggle="modal" data-target="#exampleModal2">Watch project</a>
		        </div>
				</div>
			</div>

	</div>
	</div>
	</div>
	<!-- Modal -->
	<div class="modal fade  bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header ">
	        <h5 class="modal-title ml-auto" id="exampleModalLabel">Blog website</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body text-center">
	        Neki tekst o projektu koji ce se nalaziti sigurno na sredini svega
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="new"></div>
	<div class="novosti1">
		<div class="container " >
			<div class="row"> 
				<div class="col-lg-2 col-md-1"></div>
				<div class="col-lg-8 col-md-10 novo ">
					<h3 class="text-center pb-2 " >Keep up with new projects <i class="fas fa-paper-plane"></i></h3><br>
											@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						@if(Session::has('new'))
						<div class="alert alert-info">
							{{ Session::get('new') }}
						 </div>
						@endif
					<form action="/new" method="post">
					  @csrf
					  <div class="form-group d-flex">
					    <label for="email"></label>
					    <input type="email" class="form-control prvi" name="email" id="email" placeholder="Your email" >

					     <input type="submit" class="btn btn-outline-dark drugi" value="Send" >
					  </div>

					  
					</form>

					</div>
				
				<div class="col-lg-2 col-md-1"></div>
			</div>
		</div>
	</div>
		<div  id="contact"></div>
		<div class="slika">
			<div class="pozadina">
				<div class="container ">
					<div class="row">

						<div class="col-lg-2 col-md-2 col-sm-12"></div>
						<div class="col-lg-8 col-md-8 col-sm-12 kontis border border-light ">
						<br>
							<h4 class="text-center" >Contact me <i class="fa fa-envelope"></i></h4>

						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						@if(Session::has('notif'))
						<div class="alert alert-info">
							{{ Session::get('notif') }}
						 </div>
						@endif
						
						<form action="/mail" method="post" class="pr-3 pl-3">
							@csrf

						  <div class="form-group  ">
						    <label for="name"></label>
						    <input type="text" class="form-control" id="name" placeholder="Your name" name="name">
						  </div>
						  <div class="form-group  ">
						    <label for="email"></label>
						    <input type="email" class="form-control" id="email" placeholder="Your email" name="email" >
						  </div>
						  <div class="form-group  ">
						    <label for="question"></label>
						    <textarea   cols="30" rows="10" id="question" class="form-control" placeholder="Your question" name="question"></textarea>
						  </div>
						  <input type="submit" class="btn btn-outline-light btn-lg " value="Send" >
						   <input type="reset" class="btn btn-outline-light btn-lg " value="Reset" >
					</form>
					
						<br><br>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12"></div>
					</div>
				</div>
			</div>
		</div>

<!------ Include the above in your HEAD tag ---------->
<div id="comment"></div>
<div class="comments bg-light" >
	<h2 class="belo text-center" >Comments</h2>
	<div class="text-center "> 
	@if(!isset(Auth::User()->comment))
		<form action="/comment" method="post">
			@csrf
			<div class="form-group usko">
				  @if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						@if(Session::has('comment'))
						<div class="alert alert-info">
							{{ Session::get('comment') }}
						 </div>
						@endif

				<textarea name="description" id="" cols="30" rows="10" class="form-control levo" placeholder="Your comment"></textarea>
			</div>
			<div class="text-center">
			<div class="rating ">
			    <input type="radio" id="star5" name="rating" value="5" class="d-hidden" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
			    
			    <input type="radio" id="star4" name="rating" value="4"  class="d-hidden"/><label class = "full" for="star4" title=" 4 stars"></label>
			    
			    <input type="radio" id="star3" name="rating" value="3"  class="d-hidden"/><label class = "full" for="star3" title=" 3 stars"></label>
			    
			    <input type="radio" id="star2" name="rating" value="2"  class="d-hidden" / ><label class = "full" for="star2" title=" 2 stars"></label>
			    
			    <input type="radio" id="star1" name="rating" value="1" class="d-hidden" /><label class = "full" for="star1" title=" 1 star"></label>
			    
			</div></div> <br><br> <br>
			  <button type="submit" class="btn btn-outline-dark">Post comment</button>
			
	
		 </form>
		@endif
	 </div>

 <br><br>
<div class="container">
	<div class="text-center">
			    	@if(Session::has('deletecomm'))
					<div class="alert alert-info">
					{{ Session::get('deletecomm') }}
						</div>
					@endif 
	</div>
  <div class="row">
  	<div class="col-lg-1 col-md-12 col-sm-12"></div>
  	<div class="col-lg-9 col-md-12 col-sm-12"> 
   
  	@foreach($sve as $s)
  	 <div class="comment ">
      <a class="comment-img" href="#non">
        <div class="img"></div>
      </a>
      <div class="comment-body ">
        <div class="text">
          <p>
          	<span class="ora">
			@for($i = 0; $i < $s->rating ; $i++)

				<i class="fa fa-star"></i> 

          	@endfor</span> -

          	{{$s->description}}</p>
        </div>
         <div class="d-flex justify-content-between">
        	<div><p class="attribution">by <span class="font-weight-bold" data-toggle="tooltip" data-placement="bottom" title="{{$s->email}}">{{$s->name}}</span> {{$s->created_at}}</p>
        	</div>
        	<div class="d-flex pt-2">
        		@if($s->user_id === Auth::User()->id)
        		<form action="/updatecomment/{{$s->id}}" method="get" class="pr-2">
        			@csrf
        			
        			<input type="submit" value="Update" class="btn btn-sm btn-dark">
        		</form>
        		<form action="/deletecomment/{{$s->id}}" method="post">
        			@csrf
        			@method('DELETE')
        			<input type="submit" value="Delete" class="btn btn-sm btn-outline-dark">
        		</form>
        		@endif
        	</div>
        </div>
        
      </div>
    </div>
    @endforeach

	<br><br>

</div>
  	<div class="col-lg-1 col-md-12 col-sm-12"></div>



  </div>
</div>
  </div>
</main>
<footer id="info">
	<div class="container">
		<div class="row text-light text-center ae"> 
			<div class="col-lg-3 col-md-6 "><br><br><br><h6>Social networks <i class="fa fa-globe"></i> </h6>
				<div class="mreze">
				<a href="https://www.facebook.com/vuk.zdravkovic.9"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.instagram.com/v.zdravkovic/"><i class="fab fa-instagram"></i></a>		
						<a href="https://www.linkedin.com/in/vuk-zdravkovic-701703159/"><i class="fab fa-linkedin"></i></a>	
				</div>
			</div>

			<div class="col-lg-3 col-md-6"><br><br><br><h6>Email <i class="fa fa-envelope"></i> </h6>
				<p>vukzdravkovic69@gmail.com</p>
			</div>
			<div class="col-lg-3 col-md-6"><br><br><br><h6>Mobile <i class="fa fa-mobile"></i> </h6>
				<p>+381628377040</p>
			</div>
			<div class="col-lg-3 col-md-6"><br><br><br><h6>interesting <i class="fas fa-smile"></i> </h6>
				<p>You are CSS3 in my HTML5</p>
			</div>
		</div>
	</div>
	<div class="container-fluid aj">
		<div class="row">
			<div class="col-lg-12 text-light text-center"><br>
				<p>Copyright &copy; 2019 Portfolio Vuk Zdravkovic. All Rights Reserved. Credits: Vuk Zdravković &nbsp;  <a href="sitemap.xml" class="text-light"><i class="fas fa-sitemap"></i></a></p>
			</div>
		</div>
	</div>
</footer>

@endsection