jQuery(document).ready(function ($) {
    
    $('a[target!="_blank"]:not(".not-redirect"):not([href*="#"]):not([href*="javascript:void(0)"])').click(function (t) {
            $("body").addClass("page-have-loader");
        }),
        setTimeout(function () {
            runAfterLoader();
            $("body").addClass("page-loaded");
    }, 200);

    /*--------------------------------------------------------
    Run after load
    ---------------------------------------------------------*/
    var scrollMagicController = new ScrollMagic.Controller();

    function runAfterLoader() {
        $('.will-animate').each(function () {
            var $sections = $(this);
            var scene01 = new ScrollMagic.Scene({
                    triggerElement: this,
                    duration: 500
                })
                .triggerHook(0.75)
                // .addIndicators()
                .addTo(scrollMagicController);

            scene01.on('enter', function (e) {
                $sections.addClass('animated');
            });
        });

    }

    /*--------------------------------------------------------
	Header stick
    ---------------------------------------------------------*/
    var scroll = $(window).scrollTop();
    if (scroll > 80) {
        $('header').addClass('sticky');
    } else {
        $('header').removeClass('sticky');
    }
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 80) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    });
    
    /*--------------------------------------------------------
	Menu trigger
    ---------------------------------------------------------*/

    $('.menu-trigger').click(function(){
        $('.menu-wrap').toggleClass('open-menu');
        $('body').toggleClass('hide-body');
        $('.logo-area').toggleClass('logo-area-active');
        $('.menu-trigger').toggleClass('menu-trigger-active');
        $('#header').toggleClass('header-active-bg');
    })

    $(".menu-sidebar-content li.sub-menu > a").click(function () {
        if ($(window).width() < 850) {
        $(".open").not(this).removeClass("open").next().slideUp(100);
        $(this).toggleClass("open").next().slideToggle(100);
        }
    });
    /*--------------------------------------------------------
	Banner slider
    ---------------------------------------------------------*/
    $('.banner-slider').slick({
        autoplay: true,
        draggable: true,
        fade: true,
        cssEase: 'ease-in-out',
        infinite: true,
        dots: true,
        arrows: false,
        autoplaySpeed: 4000,
        rows: 0,
    });
    /*--------------------------------------------------------
	Tabs
	---------------------------------------------------------*/
    $(".tabContent").hide(); 
    $("ul.tabs li:first").addClass("active").show(); 
    $(".tabContent:first").show(); 
    
    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active"); 
        $(this).addClass("active"); 
        $(".tabContent").hide(); 
        var activeTab = $(this).find("a").attr("href"); 
        $(activeTab).fadeIn(); 
        return false;
    });
    /*--------------------------------------------------------------
    News
    --------------------------------------------------------------*/ 
    
    $('.news-slider').slick({
        autoplay: true,
        draggable: true,
        infinite: true,
        dots: true,
        arrows: false,
        autoplaySpeed: 4000,
        rows: 0,
    });

    /*--------------------------------------------------------------
    Why-us
    --------------------------------------------------------------*/
    
    $('.why-us-slider').slick({
        infinite: false,
        speed: 300,
        swipeToSlide: true,
        nextArrow: "<img class='a-left control-c prev slick-prev' src='./images/icons/arrow.svg'>",
        prevArrow: "<img class='a-right control-c next slick-next' src='./images/icons/arrow.svg'>",
        dots: false,
        arrows: true,
        rows: 0,
    });
      
});

