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
        <link rel="stylesheet" href="//localhost:1000/src/unslider.css">        
    </head>
    <body>
        <header id="top">
            <div class="wrap">
                <nav>
                    <img id="logo" src="img/logo.png" alt="Unslider" title="Unslider" width="34" height="27"><sup>2.0</sup>
                    
                    <a href="#download" class="download">Download <span>v1.1</span></a>
                    <a href="#extras">Extras</a>
                    <a href="#options">Options</a>
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
        
        <section id="options">
            <div class="wrap">
                <div class="text">
	                <h2>The Unslider options object</h2>
	                <p>There’s a few configurable points you can change when setting Unslider up, which you can easily add by using an <b>options object</b>.</p>
	                <p>You can use as many (or as few) options as you want, or you can leave the whole options object blank.</p>
	                <p>If you’re going to use an object, make sure to wrap it in <b>{curly braces}</b>, otherwise you’ll just get a broken page.</p>
				</div>
                
                <pre>{
    <span class="comment">//  How fast to move between slides (in ms)</span>
    speed: <span class="val">500</span>,
    
    <span class="comment">//  The length of time to leave between moving slides (in ms)</span>
    interval: <span class="val">2000</span>,
    
    <span class="comment">//  Callback function for a slide has finished sliding
    //  parameters are:
    //   - this, the current active slide
    //   - "el", the base element"
    //   - "index", the current active slide's index</span>
    complete: <span class="val">function(el, index) {}</span>,
    
    <span class="comment">//  Add keyboard (L/R arrow) support?</span>
    keys: <span class="val">true</span>,
    
    <span class="comment">//  Add navigation dots?
    //  This will only append a &lt;nav&gt; element with &lt;ol&gt; in.
    //  If you want to style the dots, you'll need to write
    //  some custom CSS to do that. It doesn't come included with
    //  Unslider, to keep things small.</span>
    dots: <span class="val">true</span>,
    
    <span class="comment">//  Want the slider to start automatically? We can do that.</span>
    autostart: <span class="val">true</span>
}</pre>
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
                        
                        <p>Add <code>{ infinite: true }</code> to your Unslider’s options object to activate the Infinite Scroll extra.</p>
                        
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

                        <p>Add <code>{ fade: true }</code> to your Unslider’s options object to activate the Fade Transition extra.</p>
                        
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
                        
                        <p>Add <code>{ vertical: true }</code> to your Unslider’s options object to activate the Infinite Scroll extra.</p>

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
        <script src="//localhost:1000/src/unslider.js"></script>
        
        <!-- Optional extras: you don't need these for Unslider to work, but if you want infinite/fade/vertical extras, add 'em in. -->
        <script src="//localhost:1000/src/extras/unslider.infinite.js"></script>
        <script src="//localhost:1000/src/extras/unslider.fade.js"></script>
        <script src="//localhost:1000/src/extras/unslider.vertical.js"></script>
        
        <!-- Here's where I'm calling Unslider. You don't need to do all of these. -->
        <script>
            $(function() {
                //  Default demo, no special features
                $('.unslider-demo').unslider();
                
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
    </body>
</html>