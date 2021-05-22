<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>@yield('title', config("app.name"))</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/screen.css')}}"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="post-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="{{ url('/') }}"><img src="assets/img/logountag.png" alt="Fashion Critiques"/></a>
	<ul id="menu">
    <li class="nav-home" role="presentation"><a href="{{ url('/') }}">Home</a></li>
		<li class="nav-article-example nav-current" role="presentation"><a href="{{ url('/article') }}">Artikel</a></li>
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
		<article class="post featured">
		<section class="post-content">
        <h1>Laravel</h1>
		<p>
        Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.
		</p>
        <p>
        Framework ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.
        </p>        
        <p>
        Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.
        </p>
		<p>
        Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.
		</p>
        <h3>
        Fitur-Fitur pada Laravel
        </h3>
		<p>
        Banyak sekali fitur yang tersedia pada PHP Framework modern ini, Berikut ini fitur framework Laravel yang membedakan antara framework php ini dari framework lainnya. Apa saja fitur utama laravel?
		</p>
        <p>
        <li><strong>Dependency Management,</strong> Adalah sebuah fitur yang berguna untuk memahami fungsi wadah layanan (IoC) memungkin objek baru dihasilkan dengan pembalikan controller dan merupakan bagian inti untuk mempelajari aplikasi web modern.</li><li><strong>Modularity,</strong> adalah sejauh mana sebuah komponen aplikasi web dapat dipisahkan dan digabungkan kembali. Modularitas dapat membantu kamu untuk mempermudah proses update, Bukan hanya itu, Dalam membangun dan mengembangkan website, fitur ini memungkinkan kamu untuk menyempurnakan dan meningkatkan fungsionalitas dari web tersebut.</li><li><strong>Authentication,</strong> adalah bagian integral dari aplikasi web modern, Laravel menyediakan otentikasi di luar kotak, dengan menjalankan perintah sederhana. Kamu juga dapat membuat sebuah sistem yang otentikasinya berfungsi secara penuh dan proses konfigurasi otentikasi sudah berjalan secara otomatis.</li><li><strong>Caching</strong>, adalah sebuah teknik untuk menyimpan data di lokasi penyimpanan sementara dan dapat diambil dengan cepat saat dibutuhkan. Dalam laravel, hampir semua data caching berasal dari tampilan ke rute, Sehingga dapat mengurangi waktu pemrosesan dan meningkatkan kinerja.</li><li><strong>Routing</strong>, Routing Laravel dapat digunakan untuk membuat aplikasi yang tenang dengan mudah. Dalam framework ini semua request dipetakan dengan bantuan rute. Kamu juga dapat mengelompokkan rute, menamainya, menerapkan filter pada mereka dan mengikat data model Anda kepadanya.</li><li><strong>Restful Controller</strong>, Adalah sebuah fitur yang berfungsi memisahkan logika dalam melayani HTTP GET and POST. Kamu juga dapat membuat pengontrol sumber daya yang dapat digunakan untuk membuat CRUD dengan mudah.</li><li><strong>Testing and Debugging</strong>, Laravel hadir dengan menggunakan PHPUnit di luar kotak yang berfungsi untuk menguji aplikasi kamu. Framework ini dibangun dengan pengujian dalam pikiran sehingga mendukung pengujian dan debugging terlalu banyak.</li><li><strong>Template Engine,</strong> Blade adalah template engine Laravel, Blade berfungsi untuk menyediakan sejumlah fungsi pembantu untuk memformat data kamu dalam bentuk tampilan.</li><li><strong>Configuration Management Features</strong>, Dalam laravel semua file konfigurasi kamu disimpan di dalam direktori config, Kamu dapat mengubah setiap konfigurasi yang tersedia.</li><li><strong>Eloquent ORM</strong>, Laravel berbasis pada Eloquent ORM yang menyediakan dukungan untuk hampir semua mesin basis data. Fitur ini juga berfungsi untuk menjalankan berbagai operasi database di dalam website dan mendukung berbagai sistem database seperti MySQL dan SQLite.</li>
        </p>
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
</body>
</html>