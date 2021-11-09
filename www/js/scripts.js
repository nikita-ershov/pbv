"use strict";

new WOW().init();
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

window.onload = function () {
    let mapElement = document.getElementById('fabrics-map-id');
    if (!mapElement) {
        return;
    }

    var ImageMap = function (map) {
            var n,
                areas = map.getElementsByTagName('area'),
                len = areas.length,
                coords = [],
                previousWidth = 2000;
            for (n = 0; n < len; n++) {
                coords[n] = areas[n].coords.split(',');
            }
            this.resize = function () {
                var n, m, clen,
                    x = document.body.clientWidth / previousWidth;
                for (n = 0; n < len; n++) {
                    clen = coords[n].length;
                    for (m = 0; m < clen; m++) {
                        coords[n][m] *= x;
                    }
                    areas[n].coords = coords[n].join(',');
                }
                previousWidth = document.body.clientWidth;
                return true;
            };
            window.onresize = this.resize;
        },
        imageMap = new ImageMap(document.getElementById('fabrics-map-id'));
    imageMap.resize();
}

function getScrollTopPadding() {
    return 0;
}

function scrollToElement(element, hash = '') {
    $('html, body').stop().animate({
        scrollTop: element.offset().top - getScrollTopPadding()
    }, 700, function() {
        if (hash) {
            window.location.hash = hash;
        }
    });
}

$(function() {
    $.extend({
        showPopupMessage: function(message) {
            $.fancybox.open(
                '<div><div class="popup-message">' + message + '</div></div>',
                {
                    afterClose: function() {
                        $.fancybox.close(true);
                    }
                }
            );
        }
    });

    $('.header-menu').sticky({
        paddingTop: 0,
        zIndex: 250,
        wrapperClassName: 'header-menu-sticky',
    });
    $('a[href="#popupOrder"]').on('click', function(e) {
        $($(this).attr('href')).find('[name="p16"]').val($(this).data('item-name') + "\n" + $(this).data('item-url'));
    });

    $('[type="tel"]').each(function() {
        new IMask(this, {
            mask: '+{7} (000) 000-00-00',
            lazy: false
        });
    });

    $('a[href^="#"].anchor').add('.header-menu a').add('.footer-menu a').on('click', function (e) {
        let elementId = $(this).attr('href');
        if ($(elementId).length) {
            e.preventDefault();
            scrollToElement($(elementId), this.hash);
        }
    });

    $('a[href^="tel:"]').on('click', function(e) {
        let popupRecallForm = $('#popupRecall').find('form');

        if ($(window).width() >= 768) {
            e.preventDefault();
            $.fancybox.open({
                src: "#popupRecall",
            });
        } else {
            return true;
        }
    });

    $(".tabs ul li").on('click', function () {
        let e = $(this).attr("data-tab");
        $(this).parent().find(".active").removeClass("active");
        $(this).addClass("active");
        $(this).closest('.tabs').find('.tabs-content').find(".active").removeClass("active");
        $(this).closest('.tabs').find('.tabs-content').find('.tab-content[data-tab="' + e + '"]').addClass("active");
    });

    $('.header-bars').on('click', function() {
        $(this).toggleClass('opened');
        $('.header-menu').slideToggle();
    });

    $('#scrollToTop a').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    let fabricsInfo = $('.fabrics-map-info').eq(0);
    let cursorOnFabricsInfo = false;
    fabricsInfo.hover(
        function(e) {
            cursorOnFabricsInfo = true;
        },
        function(e) {
            cursorOnFabricsInfo = false;
        }
    );
    $("map#fabrics-map-id area").hover(
        function(e) {
            let title = $(this).data('title');
            let el = $(this);
            let position = el.attr('coords').split(',');
            let x = +position[0];
            let y = +position[1];
            let r = +position[2];

            if (title) {
                $('.fabrics-list-item').removeClass('active');
                $(el.data('item')).addClass('active');
                fabricsInfo.stop().text(title).css({
                    left: x,
                    top: y-r-fabricsInfo.outerHeight()
                }).fadeIn();
            }
        },
        function(e) {

        }
    ).on('click', function(e) {
        e.preventDefault();
    });

    $('.pbv-map-list-item').on('click', function() {
        $(this).parent().find('.pbv-map-list-item').removeClass('active');
        $(this).addClass('active');

        let src = $(this).data('image');
        $('.pbv-map-image img').attr('src', src);
    });

    $('.about-item-slider').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: false,
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });
    });

    $('.letters-slider').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
    $('.news-slider').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: false,
            centerMode: false,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });

    $('.pbv-news-list').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: false,
            centerMode: false,
            variableWidth: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });

    $('.udk-gallery-list').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });
    $('.pbv-lab-gallery').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: false,
            variableWidth: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });

    $('.udk-letters-slider').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });
    $('.pbv-letters-slider').each(function() {
        $(this).slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });
    $('.pbv-gallery-slider').each(function() {
        $(this).slick({
            dots: false,
            arrows: false,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
        });
    });

    $('form.ajax').on('beforeSubmit', function () {
        var $yiiform = $(this);
        $.ajax({
                type: $yiiform.attr('method'),
                url: $yiiform.attr('action'),
                data: $yiiform.serializeArray(),
            }
        )
            .done(function(data) {
                if(data.success) {
                    if (data.message) {
                        $.showPopupMessage(data.message);
                        $yiiform[0].reset();
                    }
                } else if (data.validation) {
                    $yiiform.yiiActiveForm('updateMessages', data.validation, false);
                } else {

                }
            })
            .fail(function () {

            })

        return false; // prevent default form submission
    });

    $('.udk-map-list li').hover(
        function() {
            if ($(this).data('image')) {
                $('.udk-map-image img').attr('src', $(this).data('image'));
            }
        },
        function() {
            $('.udk-map-image img').attr('src', $('.udk-map-image img').data('src'));
        }
    );
});

