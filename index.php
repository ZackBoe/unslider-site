<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				
		<title>Unslider, the simplest carousel slider for jQuery</title>
		<meta name="description" content="Here's a description of the site's page…">
		
		<!-- CSS and other pretties -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/site.css">

		<link rel="stylesheet" href="//localhost:1000/src/unslider.css">
		
		<!-- Fix viewport -->
		<meta name="msapplication-window" content="width=device-width;height=device-height">
		<meta name="viewport" content="width=device-width">
		
		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
		<![endif]-->
		
		<link rel="author" href="https://github.com/idiot/unslider/graphs/contributors">
		<link rel="publisher" href="https://twitter.com/idiot">
		
		<meta name="twitter:card" content="A super-simple slider, powered by CSS and jQuery">
		<meta name="twitter:site" content="@idiot">
		
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" sizes="16x16 24x24 32x32 48x48">
		<link rel="apple-touch-icon-precomposed" href="img/webclip.png" sizes="512x512">
	</head>
	
	<body>
	
		<nav class="sidebar">
			<img id="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAwCAYAAAChS3wfAAABwklEQVR4Ae3awWoTURSH8bMKCCb0OZq8wkyrFSmudApufKc2iwR8F/EtgjOEBON2FDdJbCst128RIRyGCy4O1945gd+FJovw/7LpwBX9evX6zSmuUeMO4Ym7wxdc4xRy7PiPAWZ4RMjUIz7imQ4wwCeEnviMwXGAOULPzP4GGONBfbhEhRHkiRuhwlJtfMBYOG7UBw1OIJk5QaO23ghHrd6sIJmq1NZaOO7VmyNIpp6rrffCERTJmd7rATyAB/AAHkDxAP/GA1xggx94DzH2Fi1WKFIHuMQtwsF3iLEW4WCPszQB9HhgBTG2RohEMAwQH79FATFWYh+JYBAg/XjtZSSCUYD047WLSASTAO8MxltFuLQI0BqMt4rwzSLAz47SLyCJnXcEaC0CfMCveIT047HHlUUAMLb7C8//k/E7lBCDAAYRjMZbB4hFKCDGiu7v1uMNA0R+hXWif4XLVA9DOkKb4GGoTP04fIavaFFBjF2hxcbscThzHsADeAAP4AE8gAcA+n5BYtv3KzKLrktSdcaXpPSPPRWOScc1uQYVhhkMH6JC03FNbtLni5Jz+FVZvyzNoY0xRYPfGYzeYYEpJnrvH5hTmc6OXikKAAAAAElFTkSuQmCC" width="32" height="24" title="Unslider" alt="Unslider logo">
			
			<ul>
				<li>
					<b>Installing Unslider</b>
					
					<ul>
						<li><a href="#downloading">Downloading</a></li>
						<li><a href="#writing-html">Setting up HTML/CSS</a></li>
						<li><a href="#basic-examples">Basic examples</a></li>
					</ul>
				</li>
				
				<li>
					<b>Customising Unslider</b>
					
					<ul>
						<li><a href="#slide-nav">Adding slide navigation</a></li>
						<li><a href="#prev-next">Adding Previous/Next arrows</a></li>
						<li><a href="#fullscreen">Making Unslider fullscreen</a></li>
						<li><a href="#responsive">Making Unslider responsive</a></li>
						<li><a href="#keyboard">Adding keyboard support</a></li>
						<li><a href="#touch">Adding touch support</a></li>
						<li><a href="#velocity-js">Adding <code>velocity.js</code> support</a></li>
					</ul>
				</li>
				
				<li>
					<b><a href="#extras">Extras <em class="amp">&amp;</em> Plugins</a></b>
					
					<ul>
						<li><a href="#infinite-scroll">Infinite scroll</a></li>
						<li><a href="#fade-animation">Fade transition</a></li>
						<li><a href="#vertical">Vertical scroll</a></li>
					</ul>
				</li>
				
				<li>
					<b><a href="#options">Options <em class="amp">&amp;</em> Methods</a></b>
					
					<ul>
						<li><a href="#options-list">All options</a></li>
						<li><a href="#start-stop"><code>.start()</code> <em class="amp">&amp;</em> <code>.stop()</code></a></li>
						<li><a href="#move"><code>.move(<em>to_index</em>)</code></a></li>
						<li><a href="#destroy"><code>.destroy()</code></a></li>
						<li><a href="#hooks"><code>.hook</code></a></li>
					</ul>
				</li>
			</ul>
			
			<div class="cta">
				<a class="btn full download" href="#download">Download Unslider</a>
				<a class="btn github" href="//github.com/idiot/unslider">Github</a>
				<a class="btn twitter" href="//twitter.com/idiot">Twitter</a>
			</div>
		</nav>
		
		<main>
			<section id="welcome">
				<article id="demo">
					<div class="demo-slider">
						<ul>
							<li>
								<h1>The jQuery slider that just slides.</h1>
								<p>Unslider’s the fastest way to get a carousel up and running in your site.</p>
							</li>
							
							<li>
								<h1>Fluid, flexible, fantastically minimal.</h1>
								<p>Use any HTML in your slides, extend with CSS. You’re in full control.</p>
							</li>
							
							<li>
								<h1>Open-source.</h1>
								<p>Everything to do with Unslider is <a href="//github.com/idiot/unslider">hosted on GitHub</a>.</p>
							</li>
						</ul>
					</div>
				</article>
				
				<article id="intro">
					<div class="wrap">
						<p><b>Unslider is a plugin for jQuery that allows you to set up a slider (or carousel) with minimal effort.</b> All you need to get started is a copy of jQuery, the Unslider plugin and any optional extras, and a page to put it in.</p>
						<p>If you’re looking for a demo, there’s one above (and a few more littered on the page) and all the documentation is below. Enjoy!</p>
					</div>
				</article>
			</section>
			
			<section id="installation">
				<article id="downloading">
					<div class="wrap">
						<h2>Downloading Unslider</h2>
						<p>Unslider requires jQuery — it just won’t work without it — so you’ll need to start off by linking to jQuery on your page (if you haven’t already). There’s two ways of linking jQuery:</p>
						<p class="fyi">To check if your page has jQuery in, open up the <a href="http://webmasters.stackexchange.com/questions/8525/how-to-open-the-javascript-console-in-different-browsers">JavaScript console</a> and paste <code>!!window.jQuery</code> in. If it says <code>false</code>, you’ll need to link jQuery.</p>
						
						<ol>
							<li>“Hotlinking” it from a <abbr title="content distribution network">CDN</abbr>, i.e <a href="https://developers.google.com/speed/libraries/devguide#jquery">Google</a>.</li>
							<li><a href="http://jquery.com/download/">Downloading and including it locally</a> on the page.</li>
						</ol>
						
						<p>Once you’ve downloaded jQuery, go ahead and click <a href="#download">the big green button on the left</a> to download Unslider, and reference your two new downloads on the page. They should (roughly) go like this in the markup:</p>
						
						<div class="progress-demo">
							<ul>
								<li data-title="Adding JavaScript/CSS">
									<pre class="code-example"><span class="ghost">&lt;!DOCTYPE html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;title&gt;Welcome to my Weiner Dog Website!&lt;/title&gt;</span>
	&lt;link rel="stylesheet" href="<span class="adjustable">/path/to/unslider.css</span>"&gt;
<span class="ghost">&lt;/head&gt;
&lt;body&gt;
	&lt;h1&gt;I love Weiner Dogs!&lt;/h1&gt;
	&lt;p&gt;What’s up with them stumpy legs, yo?&lt;/p&gt;</span>
</pre>
								</li>
								
								<li data-title="Adding HTML in">
									<pre class="code-example">muh htmls</pre>
								</li>
							</ul>
						</div>
					</div>
				</article>
			</section>
		</main>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="jquery.touchSwipe.min.js"></script>
		
		<script src="//localhost:1000/src/unslider.js"></script>
		<script src="//localhost:1000/src/extras/unslider.infinite.js"></script>
		<script src="//localhost:1000/src/extras/unslider.fade.js"></script>
		<script src="//localhost:1000/src/extras/unslider.vertical.js"></script>
			
        <script>
            $(function() {
            	//  Not actually used on the site, but this is the default functionality
                //  Default demo, no special features
                $('.demo-slider').unslider({
                	speed: 750,
                	delay: 4000,
                	dots: true,
                	keys: false
                });
                
                //  Not actually used on the site, but this is the default functionality
                //  Default demo, no special features
                $('.progress-demo').unslider({
                	autostart: false,
                	dots: true,
                	fade: true,
                	speed: 200
                });
                
                //  Infinite scroll
                //  Only works if you've got the unslider.infinite.js extra on the page too
                $('.unslider-infinite').unslider({infinite: true});

                //  Fade transitions
                //  Same as infinite and vertical, you need to have unslider.fade.js too
                $('.unslider-fade').unslider({fade: true});
                
                //  Vertical scroll
                //  You know it by now, doesn't work without unslider.vertical.js
                $('.unslider-vertical').unslider({vertical: true});
                
                //  And this is smooth scroll stuff.
                //  You can ignore this, it doesn't affect Unslider in any way.
                $('a[href^="#"]').click(function() {
                    return !$('html,body').animate({scrollTop: $($(this).attr('href')).position().top - 7}, 400);
                });
            });
        </script>
		
		<script>
			<!-- This is specific to THIS WEBSITE ONLY. Don't copy this, it won't do anything! -->
			$('.sidebar li:first').addClass('active').children('ul').slideDown().parents('li').siblings().children('ul').slideUp();
		</script>
	</body>
</html>