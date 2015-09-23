jQuery(document).ready(function($) {

	var $window = $(window),
    $html = $('html');

	$('body').scrollspy({ target: '#main-nav' });

	$('.navbar-nav>li>a').smoothScroll({
		speed: 666,
		// offset: -50,
		easing: 'swing',
		preventDefault: true
	});

	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('.navbar-default').removeClass('shift');
		} else {
			$('.navbar-default').addClass('shift');
		}
	});

    // iPhone scroll handler
    // ---------------------
    //
    // Handles applying a `scroll` class to the first and
    // last section depending on where the page is scrolled
    // to, in order to make it scroll or stay fixed.
    //
    (function() {
        var $sections = $('.center-block'),
            $firstSection = $sections.first(),
            $lastSection = $sections.last(),
            scrollClass = 'scroll',
            resized = true,
            scrollTriggerYMin = 0,
            scrollTriggerYMax = 0,
            scrollTriggeredMin = null,
            scrollTriggeredMax = null;

        // use an indirect approach to updating the trigger positions
        // this way we don't over do it with event handlers
        $window.on('resize load orientationchange', function() {
            resized = true;
        });
        // $('.ringly-item img').on('load', function() {
        //     resized = true;
        // });

        // when page size changes, recalculate trigger point for scroll change
        function updateYTriggers() {
            if (resized) {
                resized = false;

                // notify others of potential page changes
                $window.trigger('updated-y-position');

                // delay in case the above trigger causes other page
                // changes!
                window.setTimeout(function() {
                    scrollTriggerYMax = $lastSection.offset().top;
                    scrollTriggerYMin = $firstSection.offset().top;
                    $window.trigger('scroll');
                }, 1);
            }
        }

        updateYTriggers();
        window.setInterval(updateYTriggers, 200);

        // when page has scrolled see if we hit the scroll target
        $window.on('scroll', function() {
            var updateMin = false,
                updateMax = false,
                scrollY = $window.scrollTop();

            // var _data = {
            //     scrollY: scrollY,
            //     scrollTriggerYMin: scrollTriggerYMin,
            //     scrollTriggerYMax: scrollTriggerYMax,
            //     wasTriggeredMax: scrollTriggeredMax,
            //     wasTriggeredMix: scrollTriggeredMin
            // };

            if (scrollY >= scrollTriggerYMax) {
                if (scrollTriggeredMax !== true) {
                    updateMax = true;
                    scrollTriggeredMax = true;
                }
            } else {
                if (scrollTriggeredMax !== false) {
                    updateMax = true;
                    scrollTriggeredMax = false;
                }
            }

            if (updateMax) {
                $lastSection.toggleClass(scrollClass, scrollTriggeredMax);
            }

            if (scrollY <= scrollTriggerYMin) {
                if (scrollTriggeredMin !== true) {
                    updateMin = true;
                    scrollTriggeredMin = true;
                }
            } else {
                if (scrollTriggeredMin !== false) {
                    updateMin = true;
                    scrollTriggeredMin = false;
                }
            }

            if (updateMin) {
                $firstSection.toggleClass(scrollClass, scrollTriggeredMin);
            }

            // _data.updateMax = updateMax;
            // _data.updateMin = updateMin;
            // window._data = _data;

        }).trigger('scroll');

    })();

    $window.load(function() {
        $('[data-deferclass]').each(function() {
            var $this = $(this),
                className = $this.data('deferclass');
            $this.addClass(className);
        });
    });

    $('form.navbar-form div#mce-responses').on('click', function() {
        $(this).hide(1000);
    });

	// $('html, body').stop().animate({'scrollTop': $target.offset().top+2});

});

