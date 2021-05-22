<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>@yield('title', config("app.name"))</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/screen.css')}}"/> 
<!--   -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="home-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="{{ url('/') }}"><img src="assets/img/logountag.png" alt="Fashion Critiques"/></a>
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="{{ url('/') }}">Home</a></li>
		<li class="nav-article-example" role="presentation"><a href="{{ url('/article') }}">Artikel</a></li>
		<li class="nav-about-us" role="presentation"><a href="{{ url('/contact-us') }}">Contact US</a></li>
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
		<div class="grid">
			<div class="grid-item">
				<article class="post">
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">Laravel</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
                    Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya. <a class="read-more" href="/retro-is-the-new-modern/">&raquo;</a>
					</p>
					</section>
				</div>
				</article>
			</div>
			<div class="grid-item">
				<article class="post tag-romance">
				<a href="article.html"></a>
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">CodeIgniter</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
                    CodeIgniter merupakan aplikasi sumber terbuka yang berupa kerangka kerja PHP dengan model MVC untuk membangun situs web dinamis dengan menggunakan PHP. CodeIgniter memudahkan pengembang web untuk membuat aplikasi web dengan cepat dan mudah dibandingkan dengan membuatnya dari awal. <a class="read-more" href="article.html">&raquo;</a>
					</p>
					</section>
				</div>
				</article>
			</div>
			<div class="grid-item">
				<article class="post">
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">Cake PHP</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
                    CakePHP merupakan sebuah rapid development framework yang gratis dan sumber terbuka untuk PHP. CakePHP adalah sebuah framework atau kerangka kerja untuk membuat aplikasi CRUD berbasis bahasa pemrograman PHP. <a class="read-more" href="/winter-collection/">&raquo;</a>
					</p>
					</section>
				</div>
				</article>
			</div>
		</div>
	</div>
	</main>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		<a href="index.html">1461900012 - Syamsul Arifin</a> &copy; 2021<br/>
	</div>
	</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/index.js')}}"></script>
</body>
</html>