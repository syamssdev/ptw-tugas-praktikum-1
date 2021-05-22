<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>@yield('title', config("app.name"))</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<!-- contact-us-asset/ -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{URL::asset('contact-us-asset/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/screen.css')}}"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="post-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="{{ url('/') }}"><img src="assets/img/logountag.png" alt="Fashion Critiques"/></a>
	<ul id="menu">
    <li class="nav-home" role="presentation"><a href="{{ url('/') }}">Home</a></li>
		<li class="nav-article-example" role="presentation"><a href="{{ url('/article') }}">Artikel</a></li>
		<li class="nav-about-us nav-current" role="presentation"><a href="{{ url('/contact-us') }}">Contact US</a></li>
		<span class="socialheader">
		<a href="https://www.instagram.com/syamssdev/"><span class='symbol'>circleinstagram</span></a>
		<a href="https://www.linkedin.com/in/syamsul-arifin-4a5227200/"><span class='symbol'>circlelinkedin</span></a>
		</span>
	</ul>
	</nav>
	<header class="main-header " style="background-image: url(assets/img/untagbgheader.jpg)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title">Tugas Praktikum 1</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			<h2 class="page-description">Universitas 17 Agustus 1945</h2>
		</div>
	</div>
	<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
	</header>
	<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="assets/img/shadow.png" class="wrapshadow">
		<article class="post featured">
		<section class="post-content">
        <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">About me</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span> Simolawang 3 No.6, Surabaya, Jawa Timur, Indonesia</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel://1234567920">+6282143094996</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-google"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:info@yoursite.com">syamss.dev@gmail.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-linkedin"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Linkedin</span> <a href="https://www.linkedin.com/in/syamsul-arifin-4a5227200/">https://www.linkedin.com/in/syamsul-arifin-4a5227200/</a></p>
				          </div>
			          </div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">My Profile</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="Syamsul Arifin" disabled>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="syamss.dev@gmail.com" disabled>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Bio</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Bio" value="Android Developer" disabled>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(contact-us-asset/images/img.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		</section>
		
		<script>
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://wowthemesdemo.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
		</article>
	</div>
	</main>
	<div class="clearfix">
	</div>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		<a href="index.html">1461900012 - Syamsul Arifin</a> &copy; 2021<br/>
	</div>
	</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('contact-us-asset/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('contact-us-asset/js/popper.js')}}"></script>
  <script src="{{URL::asset('contact-us-asset/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('contact-us-asset/js/jquery.validate.min.js')}}"></script>
  <script src="{{URL::asset('contact-us-asset/js/js/main.js')}}"></script>
  <!-- {{URL::asset('contact-us-asset/js/js/main.js')}} -->
</body>
</html>