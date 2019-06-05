(function($) {
    "use strict";
    var $window = $(window),
        $body = $('body'),
        app = '',
        clientWidth = $window.innerWidth(),
        clientHeight = $window.innerHeight();
    $window.resize(function() {
        clientWidth = $window.innerWidth();
        clientHeight = $window.innerHeight();
    });
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    app = {
        init: function() {
            Pace.once('done', function() {
                $('.site-header').addClass('active');
                if ($body.hasClass('header-boxed')) {
                    if ($body.hasClass('header-is-closing-true')) {
                        setTimeout(function() {
                            $('.site-header').addClass('automaticaly-closed');
                        }, 2000);
                    }
                }
                setTimeout(function() {
                    if ($body.hasClass('hero-enable')) {
                        $('.page-hero').addClass('active');
                    }
                    $('.site').addClass('loaded');
                    $('.site-footer').addClass('loaded');
                }, 500);
                $('.pace, .pace-inactive').fadeOut().slideUp();
                $('.pace .pace-progress').fadeOut().slideUp().removeAttr('style');
            });
            app.header();
            app.mobile();
            app.hero();
            app.portfolio();
            app.lazy();
            app.misc();
            $window.resize(function() {
                app.hero();
                app.misc();
            });
        },
        header: function() {
            $(window).scroll(function() {
                if (!$('.site-header').hasClass("automaticaly-closed")) {
                    if ($(this).scrollTop() > clientHeight) {
                        $('.site-header').addClass('closed');
                    } else {
                        $('.site-header').removeClass('closed');
                    }
                }
            });
            $.fn.toggle = function(speed, easing) {
                return this.animate({
                    opacity: 'toggle',
                    height: 'toggle'
                }, speed, easing);
            };
            $('.site-header .menu li').hoverIntent(function() {
                $(this).find("a:first").addClass("active");
                $(this).find("ul.sub-menu").toggle(300, "easeInOutExpo");
            }, function() {
                $(this).find("a:first").removeClass("active");
                $(this).find("ul.sub-menu").toggle(300, "easeInOutExpo");
            });
        },
        mobile: function() {
            $(".trigger-mobile-nav").click(function() {
                var trigger = $(this);
                if (trigger.hasClass('active')) {
                    trigger.removeClass('active');
                } else {
                    trigger.addClass('active');
                }
            });
        },
        hero: function() {
            if ($body.hasClass('hero-enable')) {
                $('.page-hero').css('height', clientHeight);
                $('.site').css('margin-top', clientHeight);
                var fadeStart = 100,
                    fadeEnd = 600,
                    fade = $('.hero-content');
                $(window).bind('scroll', function() {
                    var offset = $(document).scrollTop(),
                        opacity = 0;
                    if (offset <= fadeStart) {
                        opacity = 1;
                    } else if (offset <= fadeEnd) {
                        opacity = 1 - offset / fadeEnd;
                    }
                    fade.css('opacity', opacity);
                });
                $('#skip a').click(function() {
                    $.scrollTo(this.hash, 1000, {
                        easing: 'easeOutQuint'
                    });
                    return false;
                });
            }
        },
        misc: function() {
            function sbwp_SetColumnsHeight() {
                if ($('.row').hasClass("normal_height")) {
                    $('.adjust_cols_height').each(function() {
                        var column_min_height = 0;
                        var that = $(this);
                        that.imagesLoaded('always', function() {
                            that.find('.column').first().siblings().addBack().css('min-height', 0).each(function() {
                                if ($(this).outerHeight(true) > column_min_height) {
                                    column_min_height = $(this).outerHeight(true);
                                }
                            });
                            that.addClass('height_adjusted').find('.column').first().siblings().addBack().css('min-height', column_min_height);
                        });
                    });
                }
            }
            if ($('.row').hasClass('adjust_cols_height')) {
                if (clientWidth > 768) {
                    setTimeout(function() {
                        sbwp_SetColumnsHeight();
                    }, 1);
                } else {
                    $('.adjust_cols_height').addClass('height_adjusted');
                }
            }
            if ($.isFunction($.fn.nivoLightbox)) {
                $(".nivo a, a.nivo").nivoLightbox({
                    effect: 'fade',
                    theme: 'default',
                });
            }
            $(".gallery-icon a").each(function() {
                $(this).addClass("fresco");
                $(this).attr("data-fresco-group", "gal");
            });
            $(".gallery-icon").each(function() {
                $(this).find('a.fresco').attr('data-fresco-group', $(this).attr('id'));
            });
        },
        portfolio: function() {
            $(".project-trigger .fa").click(function() {
                var $projectTrigger = $(".project-trigger");
                if (!$projectTrigger.hasClass('active')) {
                    $projectTrigger.addClass('active');
                } else if ($projectTrigger.hasClass('active')) {
                    $projectTrigger.removeClass('active');
                }
            });
            $('.project-content').perfectScrollbar({
                wheelPropagation: false,
                scrollYMarginOffset: 20,
                suppressScrollX: true
            });
            if ($('.single-item').hasClass('portfolio-fullscreen')) {
                $('#fullpage').fullpage({
                    menu: false,
                    lockAnchors: true,
                    navigation: true,
                    navigationPosition: 'right',
                    slidesNavigation: false,
                    css3: true,
                    scrollingSpeed: 700,
                    autoScrolling: true,
                    fitToSection: true,
                    scrollBar: false,
                    easing: 'easeInOutCubic',
                    easingcss3: 'ease',
                    loopBottom: true,
                    loopTop: false,
                    loopHorizontal: false,
                    continuousVertical: false,
                    normalScrollElements: '#element1, .element2',
                    scrollOverflow: false,
                    touchSensitivity: 15,
                    normalScrollElementTouchThreshold: 5,
                    keyboardScrolling: true,
                    animateAnchor: true,
                    recordHistory: true,
                    controlArrows: true,
                    verticalCentered: true,
                    resize: false,
                    paddingTop: '0',
                    paddingBottom: '0',
                    fixedElements: '.site-header, .site-footer',
                    responsiveWidth: 0,
                    responsiveHeight: 0,
                    sectionSelector: '.section',
                    slideSelector: '.slide',
                });
            }
        },
        lazy: function() {
            $(".do-lazy-load-on-shown").each(function(i, el) {
                var $this = $(el),
                    $images = $this.find('img[data-src]'),
                    do_resize = true,
                    loaded = 0,
                    imagesArr = [];
                if ($this.data('sbwp-lazy-loaded') == true) {
                    return;
                }
                if ($this.prop('tagName') == 'IMG') {
                    $images = $this;
                }
                $this.addClass('is-loading').data('sbwp-lazy-loaded', true);
                $images.each(function(j, el2) {
                    imagesArr.push({
                        src: $(el2).data('src'),
                        el: el2
                    });
                });
                for (var k in imagesArr) {
                    (function(index, $container) {
                        var src = imagesArr[index].src,
                            watcher = scrollMonitor.create($container[0], -$container.outerHeight() / 10);
                        watcher.enterViewport(function() {
                            var $img = $(imagesArr[index].el),
                                img = new Image(),
                                src = imagesArr[index].src;
                            $container.addClass('is-loading');
                            img.onload = function() {
                                $img.attr('src', src).removeAttr('data-src');
                                setTimeout(function() {
                                    $container.removeClass('is-loading');
                                    $img.addClass('img-loaded');
                                    $container.addClass('loading-finished');
                                    var args = [imagesArr[index].el, src];
                                    $container.trigger('lazyLoadedOnShown', args);
                                    $(window).trigger('globalLazyLoadShown', args);
                                }, 50);
                            }
                            img.src = src;
                        });
                    })(k, $this);
                }
            });
        }
    };
    $(document).ready(function() {
        app.init();
        $(".site-content").fitVids();
    });
})(jQuery);