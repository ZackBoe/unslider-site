$(function() {
    //  This is specific to THIS WEBSITE ONLY.
    //  Don't copy this, it won't do anything and might break things!
    var slider = $('main').unslider({ arrows: false, keys: false });

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
    });

    $('.demo').each(function() {
    	var $me = $(this);
        var $script = $me.find('script');
        var src = $script.html();

        var $output = $('<pre class="demo-usage" />');

        src = src.trim().split(/\s*[\r\n]+\s*/g);

        if(src[1]) {
            src.forEach(function(line, num) {
                if(num === 1 || line.indexOf('/**/') === 0) {
                    src[num] = '<span class="hilite">' + line.replace('/**/', '');
                }

                if(line === '});') {
                    src[num] = '</span>' + line;
                }
            });

            src[src.length - 1] = '</span>' + src[src.length - 1];
        }

        src = src.join('\n');

        $script.after($output.html(src));
    });
});