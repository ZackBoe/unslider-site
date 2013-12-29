<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Unslider</title>
		
		<meta name="description" content="A jQuery plugin that lets you add a simple, responsive slider to your site in seconds.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/site.css">
		
		<!-- Here's where all the styles for Unslider slides go. Copy it from here.  -->
		<!-- All the JavaScript is right before the </body> -->
		<link rel="stylesheet" href="/unslider/src/unslider.css">		
	</head>
	<body>
		<header id="top">
			<div class="wrap">
				<nav>
					<img id="logo" src="img/logo.png" alt="Unslider" title="Unslider" width="34" height="27"><sup>2.0</sup>
					
					<a href="#download" class="download">Download <span>v1.1</span></a>
					<a href="#extras">Extras</a>
					<a href="#install">Install</a>
				</nav>
				
				<div class="unslider unslider-demo">
					<ul>
						<li>
							<h1>A super-simple slider plugin for jQuery</h1>
							<p>Quick, easy, and responsive. Sets up in seconds.</p>
						</li>
						<li>
							<h1>A super-simple slider plugin for jQuery</h1>
							<p>Quick, easy, and responsive. Sets up in seconds.</p>
						</li>
					</ul>
				</div>
			</div>
		</header>
		
		<section id="install">
			<div class="wrap">
				<h2>Installing Unslider</h2>
				
				<p>Or not. Whatever.</p>
			</div>
		</section>
		
		<section id="extras">
			<div class="wrap">
				<h2>Optional extras</h2>
				
				<ul>
					<li class="infinite">
						<h3>Infinite Scroll</h3>
						<p>Instead of moving back to the first and last slides, the Infinite Scroll extra lets the slidin’ keep going on. Forever and ever and ever.</p>
						
						<div class="unslider unslider-infinite">
							<ul>
								<li>Keep on runnin’</li>
								<li>Keep on hidin’</li>
								<li class="halfling">One fine day I’m gonna be the one to make you understand</li>
								<li>Infinite scroll is the man</li>
							</ul>
						</div>
						
						<p class="download">
							<a class="btn subdued" href="/download/infinite">Unslider + Infinite <span>standard, 12kb</span></a>
							<a class="btn" href="/download/infinite.min">Unslider + Infinite <span>minified, 7kb</span></a>
						</p>
					</li>
					
					<li class="fade">
						<h3>Fade Transition</h3>
						<p>It might be called Un<em>slide</em>r, but thanks to the Fade extra, you can now use a lovely fade transition to switch between slides, too.</p>
						
						<div class="unslider unslider-fade">
							<ul>
								<li>Keep on runnin’</li>
								<li>Keep on hidin’</li>
								<li class="halfling">One fine day I’m gonna be the one to make you understand</li>
								<li>Fading slides is fun too</li>
							</ul>
						</div>
						
						<p class="download">
							<a class="btn subdued" href="/download/fade">Unslider + Fade <span>standard, 11kb</span></a>
							<a class="btn" href="/download/fade.min">Unslider + Fade <span>minified, 6.7kb</span></a>
						</p>
					</li>
					
					<li class="vertical">
						<h3>Vertical Scroll</h3>
						<p>As pop superstar Yazz once sang, the only way is up. Or down. Doesn’t matter. You can slide up and down with the Vertical Scroll extra.</p>
						
						<div class="unslider unslider-vertical">
							<ul>
								<li>Keep on runnin’</li>
								<li>Keep on hidin’</li>
								<li class="halfling">One fine day I’m gonna be the one to make you understand</li>
								<li>Infinite scroll is the man</li>
							</ul>
						</div>
						
						<p class="download">
							<a class="btn subdued" href="/download/vertical">Unslider + Vertical <span>standard, 11kb</span></a>
							<a class="btn" href="/download/vertical.min">Unslider + Vertical <span>minified, 6.7kb</span></a>
						</p>
					</li>
				</ul>
			</div>
		</section>
		
		<section id="download">
			download me pl0z
		</section>
		
		<!-- Linking to jQuery -->
		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		
		<!-- Our Unslider script, lets the bare minimum work. -->
		<script src="/unslider/src/unslider.js"></script>
		
		<!-- Optional extras: you don't need these for Unslider to work, but if you want infinite/fade/vertical extras, add 'em in. -->
		<script src="/unslider/src/extras/unslider.infinite.js"></script>
		<script src="/unslider/src/extras/unslider.fade.js"></script>
		<script src="/unslider/src/extras/unslider.vertical.js"></script>
		
		<!-- Here's where I'm calling Unslider. You don't need to do all of these. -->
		<script>
			$(function() {
				//  Default demo, no special features
				$('.unslider-demo').unslider();
				
				//  Infinite scroll
				//  Only works if you've got the unslider.infinite.js extra on the page too
				$('.unslider-infinite').unslider({infinite: true});

				//  Infinite scroll
				$('.unslider-fade').unslider({fade: true});
				
				//  And this is smooth scroll stuff.
				//  You can ignore this, it doesn't affect Unslider in any way.
				$('a[href^="#"]').click(function() {
					return !$('html,body').animate({scrollTop: $($(this).attr('href')).position().top - 10}, 400);
				});
			});
		</script>
	</body>
</html>