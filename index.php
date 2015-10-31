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

		<link rel="stylesheet" href="//localhost:10000/src/css/unslider.css">
		
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
			<a href="#welcome">
				<img id="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAwCAQAAAALQrSUAAABf0lEQVR4Ae3YsWrCUBTG8TsJhSo+h/oKRq2LYxuhS99JHRT6LqVvIU0QpXZNSxe11RL5dzhcUsiS4yUJhXxncLp8P+HilWNsaDEh4EjeOfLChBZGRj5qzDlTZM48cmUBNZ4oI8/UBLCgrMwxhjYxkhU+DUzO08BnhSSmbZgiCWliCpomIZKpIUDiYwocH0lgOCFpFAq4RnIy2JiCB0kFqAAV4B8Ahmz54F5dcEvEmq4rYMQ3AO9qQATAgZ4LwNbDWg3YgCVcCkjqd3TVAI9DQtAD3OplblIEBcC1Xmb4l6AB3OnrMxBG2QGRvj4D4S074BOrHjgD+lhAlB3wwJcjIV1/YKy5hAOSg33c6/d4ikuoIKjqFYAUQX8Zu8lpqdcA0t9h4/BT7Lk8RpYQXfwYea7PcY9XInw1YEzENsNzXP0jqgAVoAKUvKDYlb2iWSZLqqDQJVWAZGboECMJ8annXl7HJ0QS0yl3Ubmg/FVt+ctq7LSZEfJD3tmzZEbH9v4C97CdQB41GrUAAAAASUVORK5CYII=" width="32" height="24" title="Unslider" alt="Unslider logo">
			</a>

			<div class="cta">
				<a class="btn download" href="#download">Download Unslider</a>
				<a class="btn github" href="//github.com/idiot/unslider">Github</a>
			</div>
		</nav>
		
		<main>
			<ul>
				<li id="welcome" data-nav="Welcome to Unslider">
					<div class="wrap vertical">
						<h1>Unslider is an ultra-simple<br>jQuery slider for your website.</h1>
						
						<div class="actions">
							<div class="instructions">
								<pre><span class="ghost">&lt;!-- The barebones HTML required for Unslider --&gt;</span>
&lt;div class=&quot;banner&quot;&gt;
    &lt;ul&gt;&lt;li&gt;This is my slider.&lt;/li&gt;&lt;li&gt;Pretty cool, huh?&lt;/li&gt;&lt;/ul&gt;
&lt;/div&gt;

<span class="ghost">&lt;!-- And the relevant JavaScript --&gt;</span>
&lt;script src=&quot;//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;/path/to/unslider.js&quot;&gt;&lt;/script&gt; <span class="ghost">&lt;!-- Replace with the right path! --&gt;</span>
&lt;script&gt;$(function() { $(&apos;.banner&apos;).unslider() })&lt;/script&gt;</pre>
							</div>
							
							<div class="download">
								<p>To get started using Unslider, just download the repos:</p>
								
								<a class="btn" href="#download">Download
									<span>(version 2.0, 5kb)</span>
								</a>
								
								<p>After more customisation or documentation? Try the navigation above (or below). It’s also a demo of Unslider. The whole site is!</p>
							</div>
						</div>
					</div>
				</li>
				
				<li id="setup" data-nav="Installing <span class='amp'>&amp;</span> Setting Up">
					
				</li>
				
				<li id="methods" data-nav="Methods <span class='amp'>&amp;</span> Options">
					<div class="spaced"><div class="wrap">
						<h1>Options.</h1>
						
						<dl>
							<dt>autoplay <em>default: <code>false</code></em></dt>
							<dd>Should the slider move by itself or only be triggered manually?</dd>

							<dt>delay <em>default: <code>3000</code></em></dt>
							<dd>If <code>autoplay</code> is set to true, how many milliseconds should pass between moving the slides?</dd>
							
							<dt>index <em>default: <code>'first'</code></em></dt>
							<dd>If this is set to an integer, <code>'first'</code> or <code>'last'</code>, it'll set the default slide to that position rather than the first slide.</dd>

							<dt>keys <em>default: <code>true</code></em></dt>
							<dd>Do you want to add keyboard shortcut support to Unslider? This can be set to either <code>true</code>, <code>false</code>, or an options/keycode object, like so:

								<pre>keys: {
	prev: 37,
	next: 39,
	stop: 27 <span class="ghost">//  Example: pause when the Esc key is hit</span>
}</pre>
								This can be useful if you want to extend the functionality built-in to Unslider.
							</dd>

							<dt>nav <em>default: <code>true</code></em></dt>
							<dd>Do you want to generate an automatic clickable navigation for each slide in your slider? You can over-ride what appears in each link by adding a <code>data-nav="nav title"</code> parameter to each slide element (replacing 'nav title' with whatever you'd like the title to be). If you want to add dot-navigation to a slide, simply include <code>unslider-dots.css</code> to your CSS file.</dd>

							<dt>arrows <em>default: <code>true</code></em></dt>
							<dd>
								<p>Do you want to add left/right arrows to your slider? You can style these in your CSS by writing rules for <code>.unslider-arrow</code> (or alternatively you can change the HTML string to whatever you like and style that).</p>
								<p>This can be set to either <code>true</code>, <code>false</code>, or an options object. If you set an options object, the default behaviour will be overwritten. The default object looks like this:</p>

								<pre>arrows: {
	<span class="ghost">//  Unslider default behaviour</span>
	prev: '&lt;a class="unslider-arrow prev"&gt;Previous slide&lt;/a&gt;',
	next: '&lt;a class="unslider-arrow next"&gt;Next slide&lt;/a&gt;',

	<span class="ghost">//  Example: generate buttons to start/stop the slider autoplaying</span>
	stop: '&lt;a class="unslider-pause" /&gt;',
	start: '&lt;a class="unslider-play"&gt;Play&lt;/a&gt;'
}</pre>
								<p>This option is a bit of a misnomer, as you can set it to generate anything, not just arrows.</p>
							</dd>

							<dt>animation <em>default: <code>'horizontal'</code></em></dt>
							<dd>How should Unslider animate each slide? Right now, there's three different animation types:
								<ol>
									<li><code>'horizontal'</code>, which moves the slides from left-to-right</li>
									<li><code>'vertical'</code>, which moves the slides from top-to-bottom</li>
									<li><code>'fade'</code>, which crossfades slides</li>
								</ol>
							</dd>

							<dt>selectors</dt>
							<dd>
								<p>If you're not using an unordered list to display your slider, you'll need to add a <code>selectors</code> object referencing what elements Unslider should look for. The <b>container</b> should be the "conveyor belt" that gets moved, and the <b>slides</b> are - well - the slides.</p>

								<pre>selectors: {
	container: 'ul:first',
	slides: 'li'
}</pre>
								<p><b>Note:</b> you'll probably also need to update/write custom CSS in order for Unslider to work. Check the source files for <code>unslider.less</code> to get a better idea of what needs styling.</p>
							</dd>

							<dt>animateHeight <em>default: <code>false</code></em></dt>
							<dd>Should Unslider animate the height of the container to match the current slide's height? If so, set to <code>true</code>.</dd>

							<dt>activeClass <em>default:<br><code>'unslider-active'</code></em></dt>
							<dd>What class should Unslider set to the active slides and navigation items? Use this if you want to match your CSS.</dd>

							<dt>lastActiveClass</dt>
							<dd>
								<p><b>This is only used in conjunction with <code>{animation: 'fade'}</code>.</b></p>
								<p>In order to crossfade between slides properly, Unslider uses a "last-active" class to put the previously visible slide underneath. This class is the hook that should be used for this.</p>
								<p>Check the source files for <code>unslider.less</code> to get a better idea of what needs styling.</p>
								<p>By default, the class is <code>'.unslider-last-active'</code>, but you can set this option if you're going to style it yourself.</p>
							</dd>
						</dl>
					</div></div>
				</li>
				
				<li id="download" data-nav="Downloading, Compiling <span class='amp'>&amp;</span> Contributing">
					<div class="wrap vertical">
						<h1>Downloading Unslider</h1>
					</h1>
				</li>
			</ul>
		</main>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
		<script src="//localhost:10000/src/js/unslider.js"></script>
					
		<!-- WARNING! -->
		<!-- Don't copy this! -->
		<script>
			//  This is specific to THIS WEBSITE ONLY.
			//  Don't copy this, it won't do anything and might break things!
			var slider = $('main').unslider({ arrows: false });
			
			//  Click handler to automatically animate to a specific
			//  panel based on ID
			$('a[href^="#"]').click(function(e) {
                e.preventDefault();

                var $me = $(this), href = $me.attr('href');
                var $target = $('.unslider-wrap ' + href);          

                if($target.length) {
                	slider.unslider('animate:' + $target.index());
                }
            });

            if(location.hash) {
            	$('a[href^="' + location.hash + '"]').trigger('click');
            }

            //  Add our super-cool scroll effect
            $('.spaced').on('scroll', function() {
            	var $me = $(this);
            	$me[($me.scrollTop() ? 'add' : 'remove') + 'Class']('scrolled');
            })
		</script>
	</body>
</html>