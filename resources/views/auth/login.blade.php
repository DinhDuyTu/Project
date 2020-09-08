<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zcube.in/elearning/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Apr 2018 16:00:48 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-Learning Bootstrap Theme</title>
	<link rel="shortcut icon" href="{{ asset('assets/client/assets/img/ficon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/bootstrap-dropdownhover.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/font/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/client/assets/css/style.css') }}" type="text/css">
	<link href="{{ asset('assets/client/assets/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/client/assets/owl-carousel/owl.theme.css') }}" rel="stylesheet">
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="loading">
		</div>
	</div>
	<header class="insid-header">
		<!-- top-menu -->
		<div class="top-menu">
			<!-- top-header -->
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="phone dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-globe" aria-hidden="true"></i> Language : English </a>
								 <ul class="dropdown-menu">
									 <li><a href="#">English</a></li>
									<li><a href="#">Aribce</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="social">
								{{-- <ul>
									<li><a href="login.html">Log In</a></li>
									<li>|</li>
									<li><a href="sign-up.html">Sign up</a></li>
									<li>|</li>
									<li><a href="register.html">Register</a></li>
								</ul> --}}
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /top-header -->
			<!-- mainNav -->
			<div id="mainNav" class="navbar-fixed-top">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-inverse navbar-default">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><img src="{{ asset('assets/client/assets/img/logo.png') }}" alt="logo"/></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							{{-- <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
								<ul class="nav navbar-nav">
									<li>
										<a href="index-2.html">Home</a>										
									</li>
									<li>
										<a href="about.html">About Us</a>										
									</li>
									<li class="dropdown">
										<a href="courses.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Courses</a>
										 <div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">
                                 <div class="col-sm-12 col-md-12">
                                    <ul>                                       
                                       <li><a href="courses.html">All Courses (150)</a></li>
                                       <li><a href="courses.html">UI/UX (12)</a></li>
                                       <li><a href="courses.html">CMS (42)</a></li>
                                       <li><a href="courses.html">Business (18)</a></li>
                                       <li><a href="courses.html">Marketing (20)</a></li>
                                       <li><a href="courses.html">Development (12)</a></li>
                                       <li><a href="courses.html">It & Software ( 15)</a></li>
                                    </ul>
                                    <ul>                                      
                                       <li><a href="courses.html">Seo ( 20)</a></li>
                                       <li><a href="courses.html">UI/UX (12)</a></li>
                                       <li><a href="courses.html">CMS (42)</a></li>
                                       <li><a href="courses.html">Business (18)</a></li>
                                       <li><a href="courses.html">Marketing (20)</a></li>
                                       <li><a href="courses.html">Development (12)</a></li>
                                       <li><a href="courses.html">It & Software ( 15)</a></li>
                                    </ul>
									 <ul>                                      
                                       <li><a href="courses.html">Seo ( 20)</a></li>
                                       <li><a href="courses.html">UI/UX (12)</a></li>
                                       <li><a href="courses.html">CMS (42)</a></li>
                                       <li><a href="courses.html">Business (18)</a></li>
                                       <li><a href="courses.html">Marketing (20)</a></li>
                                       <li><a href="courses.html">Development (12)</a></li>
                                       <li><a href="courses.html">It & Software ( 15)</a></li>
                                    </ul>
                                 </div>                                 
                              </div>
									</li>
									<li>
										<a href="teacher.html">Teacher</a>
									</li>
									<li>
										<a href="student-portfolio.html">Student Profile</a>										
									</li>
									<li>
										<a href="pricing.html"><span>Pricing</span></a>
									</li>
									<li>
										<a href="contact.html"><span>Contact</span></a>
									</li>
									<li>
										<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
									</li>
								</ul>
								<!-- /.navbar-collapse -->
							</div> --}}

						</nav>
					</div>
				</div>


			</div>
			<!-- /mainNav -->
		</div>
		<!-- /top-menu -->
		<!-- header-title -->
		<div class="header-title">
			<h1>Sign In</h1>
		</div>
		<!-- /header-title -->
	</header>
	<section class="courses">			
		<!-- .courses -->
		<div class="container">
			<div class="row">		
				<div class="sign-up-outer">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="our-course">
						<form name="login-form" class="form-transparent clearfix" method="POST" action="{{ route('login') }}">
							@csrf
							<input name="_redirect" id="name2" value="contact.html" type="hidden">
							<div class="col-sm-12 col-md-12">
								<h2>Log In</h2>
								@if ($errors->any())
									<span style="color: red; font-size: 15px">{{ $errors->first() }}</span>
								@endif
							</div>
							<div class="col-sm-12 col-md-12 author">
								<input id="name1" name="email" required="" placeholder="Email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
							</div>
							<div class="col-sm-12 col-md-12 email">
								<input id="password" name="password" required="" placeholder="Password" type="password" class="@error('password') is-invalid @enderror">
							</div>							
							<div class="col-sm-9 col-md-7">
								<a>Forgot Password?</a>
							</div>
							<div class="col-sm-3 col-md-5">
								<label class="checkbox-inline">
									<input type="checkbox" value="" id="remember" name="remember">Keep me login
								</label>
							</div>
							<div class="col-sm-12 col-md-12 text-center">
								<button style="width: 100%" id="send" type="submit" name="submit">Login</button>
							</div>
							{{-- <div class="col-sm-12 col-md-12">
								<span>Don’t have any account? <a href="#">Create</a></span>
							</div> --}}
						</form>
					</div>
				</div>				
				</div>	
			</div>
		</div>
		<!-- /.courses -->
	</section>
	<!-- START FOOTER SECTION -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="flog"><img src="{{ asset('assets/client/assets/img/logo.png') }}" alt="f-logo" /></div>
				</div>
				<div class="col-12-12 col-sm-6 col-md-6">
					<span class="address">123, Radio Station, San francisco<br>
					 1234, new sm street<br>
					 San francisco</span>
				</div>
				<div class="col-12-12 col-sm-6 col-md-6">
					<span class="phone">Phone : +000 123 456 789<br>
						Fax : 11.880.000<br>
						E-mail: Info@example.cp,m</span>
				</div>
				<div class="col-md-12">
					<div class="f-sicon">
						<h2>FOLLOW US ON</h2>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright">
						All Right Reserved 2017
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{ asset('assets/client/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/bootstrap-dropdownhover.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/jquery.fittext.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/modernizr.html') }}"></script>
	<script src="{{ asset('assets/client/assets/js/main.html') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/client/assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('assets/client/assets/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/client/assets/js/custom.js') }}"></script>
</body>
</html>
