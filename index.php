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

		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>	
		<script src="//localhost:10000/src/js/unslider.js"></script>
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
&lt;script src=&quot;//code.jquery.com/jquery-2.1.4.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;/path/to/unslider.js&quot;&gt;&lt;/script&gt; <span class="ghost">&lt;!-- but with the right path! --&gt;</span>
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

				<li id="demos" data-nav="Demos <span class='amp'>&amp;</span> Usage">
					<div class="spaced">
						<div class="wrap">
							<div class="demo">
								<h2>Default usage</h2>

								<div class="default-slider">
									<ul>
										<li>Slide 1</li>
										<li>Slide 2</li>
										<li>Slide 3</li>
										<li>Slide 4</li>
									</ul>
								</div>

								<script>$('.default-slider').unslider();</script>
							</div>

							<div class="demo">
								<h2>Automatic slider</h2>

								<div class="automatic-slider">
									<ul>
										<li>Slide 1</li>
										<li>Slide 2</li>
										<li>Slide 3</li>
										<li>Slide 4</li>
									</ul>
								</div>

								<script>$('.automatic-slider').unslider({
	autoplay: true
});</script>
							</div>

							<div class="demo">
								<h2>Automatic fade animation</h2>

								<div class="fading-slider">
									<ul>
										<li><img src="img/cat1.jpg" alt="Cats!"></li>
										<li><img src="img/cat2.jpg" alt="Cats!"></li>
										<li><img src="img/cat3.jpg" alt="Cats!"></li>
									</ul>
								</div>

								<script>$('.fading-slider').unslider({
	animation: 'fade',
	autoplay: true
});</script>
							</div>

							<div class="demo">
								<h2>Totally manual slider</h2>

								<div class="manual-slider">
									<ul>
										<li>Slide 0 (first)</li>
										<li>Slide 1</li>
										<li>Slide 2</li>
										<li>Slide 3</li>
										<li>Slide 4</li>
										<li>Slide 5 (last)</li>
									</ul>
								</div>

								<input id="manual" placeholder="Type the slide number (or just first/last) here">

								<script>$('.manual-slider').unslider({
	keys: false,
	arrows: false,
	nav: false
});

$('#manual').on('keyup', function() {
/**/$('.manual-slider').unslider('animate:' + $(this).val());
});</script>
							</div>
						</div>
					</div>
				</li>
				
				<li id="setup" data-nav="Installing <span class='amp'>&amp;</span> Setting Up">
					
				</li>
				
				<li id="methods" data-nav="Methods <span class='amp'>&amp;</span> Options">
					<div class="spaced"><div class="wrap">
						<hgroup>
							<h1>Extending Unslider</h1>
							<p>Despite being small, Unslider is very flexible and extensible: you can change pretty much anything via options/settings, methods or callback events - all of which are documented below.</p>
						</hgroup>

						<h2>Methods</h2>
						<p>Unslider has a handful of methods you can use to control your slider and two ways you can use these methods, as shown below.</p>
						<pre><span class="ghost">//  Assuming we've got a variable set like this...
var slider = $('.my-demo-slider').unslider();</span>

<span class="ghost">// Method 1</span>
slider.data('unslider').methodName();
slider.data('unslider').methodName('arguments', 'go', 'here');

<span class="ghost">// Method 2 (the shorthand version)</span>
slider.unslider('methodName');
slider.unslider('methodName:arguments,go,here');</pre>

						<dl>
							<dt>init <em>args: <code>options</code></em></dt>
							<dd>Set everything up with the slider. This is called automatically when you set up <code>.unslider()</code> for the first time, but if there's layout problems or you want to re-initiate the slider for some reason, you can call it here. The <code>options</code> variable is an object (see below). <b>You can't call options with the shorthand <code>.unslider('init')</code> method.</b></dd>

							<dt>calculateSlides</dt>
							<dd>If a slide gets added or removed, you should call this otherwise things'll probably break.

							<pre>var slider = $('.my-slider').unslider();

<span class="ghost">// I don't like this last slide, let's get rid of it</span>
slider.find('li:last').remove();

<span class="ghost">// Let's recalculate Unslider so it knows what's going on</span>
slider.unslider('calculateSlides');
</pre>
							</dd>

							<dt>start</dt>
							<dd>Make the slider move itself between slides. Will use the options object to determine the delay between slides.</dd>

							<dt>stop</dt>
							<dd>Stop the slider moving itself between slides. Will stop any auto-playing.</dd>

							<dt>destroyKeys</dt>
							<dd>Remove any keyboard shortcut handlers for the slider.</dd>

							<dt>initKeys</dt>
							<dd>Manually add keyboard shortcut support. Can be used after <code>destroyKeys</code> to restore keyboard shortcut support, or with <code>{keys: false}</code> in the options object to add support later on.</dd>

							<dt>initSwipe</dt>
							<dd>Set up swipe functionality manually (i.e if you want to defer loading). You can add it automatically by including <a href="http://stephband.info/jquery.event.swipe/">jquery.event.move and jquery.event.swipe</a> in your code. If you need to add it after page load, you can call initSwipe, like so:

								<pre>$('.sliderman').unslider();

<span class="ghost">//  Let's say we want to use $.getScript to load our scripts for some reason</span>
var scripts = [
	'http://stephband.info/jquery.event.move/js/jquery.event.move.js',
	'http://stephband.info/jquery.event.swipe/js/jquery.event.swipe.js'
];

$.getScript(scripts[0]);

<span class="ghost">//  Once our script is loaded, we can initSwipe to add swipe support</span>
$.getScript(scripts[1], function() {
	$('.sliderman').unslider('initSwipe');
});
</pre>
							</dd>

							<dt>destroySwipe</dt>
							<dd>Remove swipe support. Does what it says on the tin.</dd>

							<dt>setIndex <em>args: <code>to</code></em></dt>
							<dd>
								<p>Set the current index and navigation for Unslider. <b>This doesn't move the slider!</b> You can get some goofy results doing this - if you want to move the slider to a specific slide, I'd recommend you use <code>animate()</code> instead.</p>
								<p>The argument <code>to</code> can be an integer with the index of the slide you want to set (remember: indexes start at zero!), or the strings <code>'first'</code> or <code>'last'</code> if you don't know how many slides there are.</p>
							</dd>

							<dt>animate <em>args: <code>to</code>, <code>dir</code></em></dt>
							<dd>
								<p>Move the slider to a specific slide, update any navigation and fire a <code>unslider.change</code> event. Use like so:</p>

								<pre><span class="ghost">//  Our trusty slider!</span>
var slider = $('.slider').unslider();

<span class="ghost">//  Move to the first slide</span>
slider.unslider('animate:first');

<span class="ghost">//  Move to the third slide</span>
<span class="ghost">//  Remember, slides are zero-indexed so 0 is first slide, 1 is second, etc.</span>
slider.unslider('animate:2');

<span class="ghost">//  Move to the last slide</span>
slider.unslider('animate:last');

<span class="ghost">//  Move to the last slide and add a direction</span>
slider.unslider('animate:last,prev');</pre>

								<p>The argument <code>to</code> <b>is required</b> and can be an integer with the index of the slide you want to set (remember: indexes start at zero!), or the strings <code>'first'</code> or <code>'last'</code> if you don't know how many slides there are.</p>
								<p>The argument <code>dir</code> <b>is optional</b> and can either be the string <code>'prev'</code> or <code>'next'</code>. This doesn't do anything, yet.</p>
							</dd>

							<dt>next</dt>
							<dd>Manually move to the next slide (or the first slide if you reach the last slide).</dd>

							<dt>prev</dt>
							<dd>Same thing as <code>.unslider('next')</code> but in the other direction. Moves the slider backwards manually or to the last slide if there's no more behind it.</dd>
						</dl>

						<h2>Events</h2>
						<p>Unslider triggers some event listeners which might be handy for whatever reason, I guess.</p>

						<pre><span class="ghost">//  Set up our slider to automatically move every second so we can see what's happening</span>
var slider = $('.slider').unslider({ autoplay: true, delay: 1000 });

<span class="ghost">//  When the slider has been set up, fire the event off.</span>
slider.on('unslider.ready', function() {
	alert('Slider is set up!');
});

<span class="ghost">//  Listen to slide changes</span>
slider.on('unslider.change', function(event, index, slide) {
	alert('Slide has been changed to ' + index);
});</pre>

						<h2>Options</h2>
						<p>Unslider uses a standard jQuery plugin options object, which looks like the highlighted example below:</p>

						<pre><span class="ghost">$('.my-demo-slider').unslider(</span>{
	settingName: settingValue,
	anotherSetting: anotherValue
}<span class="ghost">);</span></pre>

						<p>It's not required to have any of these options set — you can leave these all blank and they'll fall back to the defaults highlighted in the table below.</p>
						
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
								<p>By default, the class is <code>'.unslider-last-active'</code>, but you can set this option if you're going to style the fade animations yourself. Things will probably break. I warned you.</p>
							</dd>
						</dl>
					</div></div>
				</li>
				
				<li id="download" data-nav="Downloading, Compiling <span class='amp'>&amp;</span> Contributing">
					<div class="wrap vertical">
						<h1>Downloading Unslider</h1>
						<p>The latest version of Unslider is open-source and available through GitHub. Any hotlinked versions may be out of date — make sure to use the latest downloadable version!</p>
						<a class="btn big" href="//github.com/idiot/unslider/archive/master.zip">Download <span>unslider.zip, 5kb</span></a>
						<a class="btn big primary" href="//github.com/idiot/unslider">View on Github</a>
						
						<h2>Problems and contributing</h2>
						<a class="btn secondary" href="//github.com/idiot/unslider/issues">Got any problems?</a>
						<a class="btn secondary" href="//github.com/idiot/unslider/blob/master/contributing.md">Want to contribute?</a>
						<a class="btn secondary" href="//gitter.im/idiot/unslider">Chat about Unslider</a>
					</h1>
				</li>
			</ul>
		</main>
					
		<!-- WARNING! -->
		<!-- Don't copy this! -->
		<script src="js/site.js"></script>
	</body>
</html>