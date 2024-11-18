<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chaiden's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Free HTML5 Template plus Photoshop design">
  <meta name="keywords" content="free html template, portfolio, html5, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
</head>
<body>

	<!-- SECTION: Splashscreen -->
	<div class="splashscreen">
		<div class="preloader">
			<span class="preloader__text">Loading</span>
		</div>
	</div>
	<!-- END SECTION: Splashscreen -->
	<!-- SECTION: Navigation -->
	<div id="top" class="navigation">
		<div class="navigation__wrapper wrapper--large">
			<a class="navigation__logo logo" href="#0">CF</a>
			<nav class="navigation__container">
				<ul class="navigation__list">
					<li><a href="#0">Home</a></li>
					<li><a href="#work">Portfolio</a></li>
					<!-- <li><a href="#blog">Blog</a></li> -->
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
			<a class="navigation__cta button" href="#0">Get A Quote</a>
			<div class="navigation__burger">
				<span class="navigation__burger-el navigation__burger-el--top"></span>
				<span class="navigation__burger-el navigation__burger-el--middle"></span>
				<span class="navigation__burger-el navigation__burger-el--bottom"></span>
			</div>
		</div>
	</div>
	<!-- END SECTION: Navigation -->
	<!-- SECTION: Intro -->
	<header class="header">
		<div class="introduction">
			<h1 class="introduction__content">
				<span class="introduction__content-el introduction__content-el--name">Chaiden Foanto</span>
				<span class="introduction__content-el introduction__content-el--description" style="color: #5D6CF0FF">Portfolio</span>
				<span class="introduction__content-el introduction__content-el--job">Professional</span>
			</h1>
			<svg class="introduction__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" viewBox="0 0 130 65" xml:space="preserve" enable-background="new 0 0 130 65"><g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)"><path d="M22.2 634c-50-35-40-47 293-349 174-157 323-285 333-285 24 0 635 552 647 585 8 23 6 30-14 46 -13 10-31 19-40 19s-57-37-107-83c-50-45-179-162-287-260l-197-179 -147 134c-319 289-433 388-446 388C50.2 650 34.2 643 22.2 634z"/></g></svg>
		</div>
	</header>
	<!-- END SECTION: Intro -->
	<main role="main">
		<!-- SECTION: About -->
		<section class="about">
			<div class="about__wrapper wrapper--small">
				<div class="about__content">
					<div class="about__content-blurb blurb blurb--framed">
						<h2 class="blurb__heading">Nothing is<br>impossible</h2>
						<p class="blurb__copy no-margin">If you just work hard enough at it</p>
					</div>
					<p class="about__content-signature">Chaiden Foanto</p>
				</div>
				<img class="about__visual" style="height: 570px;width:auto" src="{{ asset('img/about-visual.png') }}" alt="Chaiden Foanto">
			</div>
		</section>
		<!-- END SECTION: About -->
		<!-- SECTION: App Design -->
		<section class="app-design">
			<div class="app-design__wrapper wrapper--large">
				<div class="app-design__content blurb">
					<h2 class="blurb__heading">UC Hub <br>Design</h2>
					<p class="blurb__copy blurb__copy--tight">App design for UC Hub, an awesome library application for Ciputra University.</p>
					<a class="transform-link" href="https://www.figma.com/design/x8avJPWrgpU5cIGZAqHD9q/UC-Hub?node-id=0-1&t=DdqwIwrvoOaeNHa3-1">Check it out</a>
				</div>
			</div>
			<figure class="app-design__visual"></figure>
		</section>
		<!-- END SECTION: App Design -->
		<!-- SECTION: Web Design -->
		<section class="web-design">
			<div class="web-design__wrapper wrapper--small">
				<div class="web-design__content blurb">
					<h2 class="blurb__heading">First Web <br>Design</h2>
					<p class="blurb__copy blurb__copy--tight">Web I made for my first portfolio, it is a memorable website for me.</p>
					<a class="transform-link" href="https://chaidenfoanto.github.io/First-Resume/">Check it out</a>
				</div>
			</div>
			<figure class="web-design__visual"></figure>
		</section>
		<!-- END SECTION: Web Design -->
		<!-- SECTION: Work -->
		<section id="work" class="work">
			<h2 class="work__heading title">Latest Projects</h2>
			<div class="work__wrapper wrapper--large">
				<ul class="work__list">
					<li class="work__list-el work__list-el--is-active">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">CF COMPANY<br>Web Design</h3>
								<p class="blurb__copy">The awesome atmosphere at CF Holding Company were superb to work with because they knew their goals exactly.</p>
							</div>
							<a class="transform-link" href="#0">See full project</a>
						</div>
						<div class="work__visual">
							<img src="{{ asset('img/CF-Company.png') }}" alt="CF Holding Company">
						</div>
					</li>
					<li class="work__list-el">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">NPLC<br>UI Design</h3>
								<p class="blurb__copy">NPLC website is created to showcase the National Programming and Logic Competition organized by Ciputra University, focusing on innovation, competitive programming, and logical problem-solving skills.</p>
							</div>
							<a class="transform-link" href="#0">See full project</a>
						</div>
						<div class="work__visual">
							<img src="{{ asset('img/NPLC.png') }}" alt="NPLC Mockup UI">
						</div>
					</li>
					<li class="work__list-el">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">CF University<br>Web Design</h3>
								<p class="blurb__copy">CF University Form allows you to apply as a student through this easy-to-use registration form.</p>
							</div>
							<a class="transform-link" href="https://chaidenfoanto.github.io/Chaiden---0806022310023---Form-Registration/">See full project</a>
						</div>
						<div class="work__visual">
							<img src="{{ asset('img/CF-Univ.png') }}" alt="CF University Form Web Design">
						</div>
					</li>
				</ul>
				<ul class="work__navigation">
					<li class="work__navigation-el work__navigation-el--is-active"></li>
					<li class="work__navigation-el"></li>
					<li class="work__navigation-el"></li>
				</ul>
			</div>
		</section>
		<!-- END SECTION: Work -->
		<!-- SECTION: Blog -->
		<!-- <section id="blog" class="blog">
			<h2 class="blog__heading title">Blog Posts</h2>
			<div class="blog__wrapper wrapper--large">
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="{{ asset('img/blog-post-1.jpg') }}" alt="Man viewing work plans">
					</div>
					<div class="blog__post-excerpt">
						<h3>Days in the office</h3>
						<p>I love using UI Kits vs website templates because UI Kits give you an easier way to use elements compared to templates.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="{{ asset('img/blog-post-2.jpg') }}" alt="Man hanging pictures">
					</div>
					<div class="blog__post-excerpt">
						<h3>Why I use CCO images</h3>
						<p>CCO images are awesome because you don't have to credit the author, and you can use them anywhere, anytime.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="{{ asset('img/blog-post-3.jpg') }}" alt="Men working at a desk">
					</div>
					<div class="blog__post-excerpt">
						<h3>Designing for IOT</h3>
						<p>Internet of things is coming so quickly, we as designers will have to design UI and UX for more things in the future.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
			</div>
			<div class="blog__view-more">
				<a class="button blog__view-more--el" href="#0">View More</a>
			</div>
		</section> -->
		<!-- END SECTION: Blog -->
		<!-- SECTION: Contact -->
		<section id="contact" class="contact">
			<h2 class="contact__heading title">Contact Me</h2>
			<div class="contact__wrapper wrapper--large">
				<div class="contact__visual">
					<img src="{{ asset('img/contact-visual.png') }}" alt="Chaiden Foanto's location">
				</div>
				<!-- Simple form setup: formspree.io -->
				<form class="contact__form">
					<input class="contact__form-el contact__form-el--name" type="text" placeholder="Your Name" spellcheck="false">
					<input class="contact__form-el contact__form-el--email" type="email" placeholder="Your Email" spellcheck="false">
					<textarea class="contact__form-el contact__form-el--message" placeholder="Your Message"></textarea>
					<input class="contact__form-el contact__form-el--submit" type="submit" value="Send">
				</form>
			</div>
		</section>
		<!-- END SECTION: Contact -->
	</main>
	<!-- SECTION: Footer -->
	<footer class="footer">
		<div class="footer__wrapper wrapper--large">
			<p class="footer__copyright no-margin">&copy; 2024 Chaiden Foanto</p>
			<a class="footer__logo logo" href="#0">CF</a>
			<a class="footer__arrow" href="#top">
				<svg class="footer__arrow-el" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0" y="0" viewBox="0 0 130 65" xml:space="preserve" enable-background="new 0 0 130 65"><g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)"><path d="M315.4 365c-336-305-345-315-290-351 18-12 32-14 45-8 10 5 145 123 300 262l281 253 196-178c108-98 237-215 287-260 50-46 98-83 107-83s27 9 40 19c20 16 22 23 14 46 -12 33-623 585-647 585C638.4 650 489.4 522 315.4 365z"/></g></svg>
			</a>
		</div>
	</footer>
	<!-- END SECTION: Footer -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"><\/script>')</script>
	<script src="{{ asset('js/functions-min.js')}}"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID and uncomment -->
	<!--
	<script>
	(function(b, o, i, l, e, r) {
		b.GoogleAnalyticsObject = l;
		b[l] || (b[l] =
			function() {
				(b[l].q = b[l].q || []).push(arguments)
			});
		b[l].l = +new Date;
		e = o.createElement(i);
		r = o.getElementsByTagName(i)[0];
		e.src = '//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e, r)
	}(window, document, 'script', 'ga'));
	ga('create', 'UA-XXXXX-X', 'auto');
	ga('send', 'pageview');
	</script>
	-->
</body>
</html>
