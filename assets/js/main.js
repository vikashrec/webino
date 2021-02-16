(function ($) {
  "user strict";
  // Preloader Js
  $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
  });
  $(document).ready(function () {
    // Nice Select
    $('.select-bar').niceSelect();
    // PoPuP 
    $('.popup').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
      disableOn: 300
    });
    $("body").each(function () {
      $(this).find(".img-pop").magnificPopup({
        type: "image",
        gallery: {
          enabled: true
        }
      });
    });
    // aos js active
    new WOW().init()
    //Faq
    $('.faq-wrapper .faq-title').on('click', function (e) {
      var element = $(this).parent('.faq-item');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('.faq-content').removeClass('open');
        element.find('.faq-content').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('.faq-content').slideDown(300, "swing");
        element.siblings('.faq-item').children('.faq-content').slideUp(300, "swing");
        element.siblings('.faq-item').removeClass('open');
        element.siblings('.faq-item').find('.faq-title').removeClass('open');
        element.siblings('.faq-item').find('.faq-content').slideUp(300, "swing");
      }
    });
    //Menu Dropdown Icon Adding
    $("ul>li>.submenu").parent("li").addClass("menu-item-has-children");
    // drop down menu width overflow problem fix
    $('ul').parent('li').hover(function () {
      var menu = $(this).find("ul");
      var menupos = $(menu).offset();
      if (menupos.left + menu.width() > $(window).width()) {
        var newpos = -$(menu).width();
        menu.css({
          left: newpos
        });
      }
    });
    $('.menu li a').on('click', function (e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('ul').slideDown(300, "swing");
        element.siblings('li').children('ul').slideUp(300, "swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(300, "swing");
      }
    })
    // Scroll To Top 
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        scrollTop.removeClass("active");
      } else {
        scrollTop.addClass("active");
      }
    });
    //Click event to scroll to top
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    //Header Bar
    $('.header-bar').on('click', function () {
      $(this).toggleClass('active');
      $('.overlay').toggleClass('active');
      $('.menu').toggleClass('active');
    })
    //Header Bar
    $('.overlay').on('click', function () {
      $(this).removeClass('active');
      $('.header-bar').removeClass('active');
      $('.menu').removeClass('active');
    })
    // Header Sticky Herevar prevScrollpos = window.pageYOffset;
    var scrollPosition = window.scrollY;
    if (scrollPosition >= 1) {
      $(".header-section").addClass('active');
    }
    var fixed_top_three = $("header");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 1) {
        fixed_top_three.removeClass("active");
      } else {
        fixed_top_three.addClass("active");
      }
    });
    //Tab Section
    // $('.tab ul.tab-menu').addClass('active').find('> li:eq(0)').addClass('active');
    $('.tab ul.tab-menu li').on('click', function (g) {
      var tab = $(this).closest('.tab'),
        index = $(this).closest('li').index();
      tab.find('li').siblings('li').removeClass('active');
      $(this).closest('li').addClass('active');
      tab.find('.tab-area').find('div.tab-item').not('div.tab-item:eq(' + index + ')').hide(10);
      tab.find('.tab-area').find('div.tab-item:eq(' + index + ')').fadeIn(10);
      g.preventDefault();
    });
    $.syotimerLang.neng = {
      second: ['sec', 'sec'],
      minute: ['mins', 'mins'],
      hour: ['hrs', 'hrs'],
      day: ['days', 'days'],
    };
    var $offerCountdown = $(".bal-countdown");
    if ($offerCountdown.length) {
      $offerCountdown.each(function () {
        var jc_year = parseInt($(this).attr("data-year"));
        if (!jc_year) jc_year = 1;
        var jc_month = parseInt($(this).attr("data-month"));
        if (!jc_month) jc_month = 1;
        var jc_day = parseInt($(this).attr("data-day"));
        if (!jc_day) jc_day = 1;
        var jc_hour = parseInt($(this).attr("data-hour"));
        if (!jc_hour) jc_hour = 1;
        $offerCountdown.syotimer({
          lang: 'neng',
          year: jc_year,
          month: jc_month,
          day: jc_day,
          hour: jc_hour,
          minute: 59
        });
      });
    }
    var swiper = new Swiper('.partner-slider', {
      slidesPerView: 4,
      loop: true,
      spaceBetween: 30,
      breakpoints: {
          991: {
            slidesPerView: 3,
          },
          767: {
            slidesPerView: 2,
          },
          500: {
            slidesPerView: 1,
          },
      },
      loop: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: true,
      },
    });
    var swiper = new Swiper('.client-slider', {
      loop: true,
      spaceBetween: 30,
      autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      }, 
      navigation: {
        nextEl: '.client-next',
        prevEl: '.client-prev',
      },
    });
    var swiper = new Swiper('.blog-slider', {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 3,
      autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      }, 
      navigation: {
        nextEl: '.client-next',
        prevEl: '.client-prev',
      },
      breakpoints: {
        991: {
          slidesPerView: 2,
        },
        767: {
          slidesPerView: 1,
        },
      },
    });
    var swiper = new Swiper('.client-slider-3', {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 2,
      autoplay: {
        delay: 1500,
        disableOnInteraction: true,
      },
      breakpoints: {
        767: {
          slidesPerView: 1,
        },
      },
    });
  });
})(jQuery);
