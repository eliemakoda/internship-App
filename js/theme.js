// js Document

    // Created on   : 02/08/2023.
    // Theme Name   : khuj -the job finder creative bootstrap 5 template
    // Version      : 1.0.
    // Developed by : (sayfurrahaman265@gmail.com) / (www.me.heloshape.com)


(function($) {
    "use strict";
    // ----------------------------- Counter Function

        var timer = $('.counter');
        if(timer.length) {
          $('.counter').counterUp({
            delay: 10,
            time: 1200,
          });
        }
    // ------------------------ Navigation Scroll

        $(window).on('scroll', function (){   
          var sticky = $('.sticky-menu'),
          scroll = $(window).scrollTop();
          if (scroll >= 100) sticky.addClass('fixed');
          else sticky.removeClass('fixed');

        });
// -------------------- From Bottom to Top Button

        $(window).on('scroll', function (){
          if ($(this).scrollTop() > 200) {
            $('.scroll-top').fadeIn();
          } else {
            $('.scroll-top').fadeOut();
          }
        });

//---------------------- Click event to scroll to top

        $('.scroll-top').on('click', function() {
          $('html, body').animate({scrollTop : 0});
          return false;
        });

          //magnificPopup
          if($(".watch-video").length){
            $('.watch-video').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: true,
              fixedContentPos: true
            });
          }
    // partner slider

    if($("#partner_slider").length) {
          $('#partner_slider').slick({
              dots: false,
              arrows: false,
              slidesToShow:5,
              slidesToScroll:1,
              infinite: true,
              lazyLoad: 'ondemand',
              autoplay: true,
              autoplaySpeed:3000,
              responsive: [
                {
                  breakpoint:1200,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:992,
                  settings: {
                    slidesToShow:3,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                }
              ]
            });
        };
 // partner slider-two
    if($("#partner_slider-two").length) {
          $('#partner_slider-two').slick({
              dots: false,
              arrows: false,
              slidesToShow:5,
              slidesToScroll:1,
              infinite: true,
              lazyLoad: 'ondemand',
              autoplay: true,
              autoplaySpeed:3000,
              responsive: [
                {
                  breakpoint:1200,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:992,
                  settings: {
                    slidesToShow:3,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                }
              ]
            });
        };
// ------------------------ Feedback Slider One

        if($(" #testimonial_slider").length) {
          $(' #testimonial_slider').slick({
              dots: false,
              prevArrow:'<i class="bi bi-chevron-left"></i>',
              nextArrow:'<i class="bi bi-chevron-right"></i>',
              centerPadding: '0px',
              slidesToShow: 3,
              slidesToScroll:3,
              autoplay: true,
              centerMode: true,
              autoplaySpeed: 3000,
              autoplaySpeed:3000,
              responsive: [
                {
                  breakpoint:1199.98,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint:991.98,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint:767.98,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:3
                  }
                }
              ]
            });
        };
// ------------------------ Feedback Slider two

        if($("#testimonial_slider-two").length) {
          $('#testimonial_slider-two').slick({
              dots: false,
              prevArrow:'<i class="bi bi-chevron-left"></i>',
              nextArrow:'<i class="bi bi-chevron-right"></i>',
              centerPadding: '0px',
              slidesToShow:1,
              slidesToScroll:1,
              autoplay: true,
              centerMode: true,
              autoplaySpeed: 3000,
            });
        };

// ------------------------ Feedback Slider three

        if($("#testimonial_slider-three").length) {
          $('#testimonial_slider-three').slick({
              dots:true,
              arrows:false,
              slidesToShow:3,
              slidesToScroll:1,
              autoplay: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint:1199.98,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:991.98,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:767.98,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                }
              ]
            });
        };
        // ------------------------ home-three-blog-slider

        if($("#home-three-blog-slider").length) {
          $('#home-three-blog-slider').slick({
              dots: true,
              arrows:false,
              centerPadding: '0px',
              slidesToShow:3,
              slidesToScroll:3,
              autoplay: true,
              centerMode: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint:1199.98,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint:991.98,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint:767.98,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:3
                  }
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:3
                  }
                }
              ]
            });
        };
                // ------------------------ our_team_slider"

        if($("#our_team_slider").length) {
          $('#our_team_slider').slick({
              dots:false,
              arrows:true,
              prevArrow:'<i class="bi bi-chevron-left"></i>',
              nextArrow:'<i class="bi bi-chevron-right"></i>',
              centerPadding: '0px',
              slidesToShow:3,
              slidesToScroll:1,
              autoplay: true,
              centerMode: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint:1199.98,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:991.98,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:767.98,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                }
              ]
            });
        };
// ------------------------recent-job-slider"

        if($("#recent-job-slider").length) {
          $('#recent-job-slider').slick({
              dots:false,
              arrows:true,
              prevArrow:'<i class="bi bi-chevron-left"></i>',
              nextArrow:'<i class="bi bi-chevron-right"></i>',
              centerPadding: '0px',
              slidesToShow:3,
              slidesToScroll:1,
              autoplay: true,
              centerMode: true,
              autoplaySpeed: 3000,
              responsive: [
                {
                  breakpoint:1199.98,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:991.98,
                  settings: {
                    slidesToShow:2,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint:767.98,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                  }
                }
              ]
            });
        };

$(window).on ('load', function (){ 

  // -------------------- Site Preloader

        $('#khoj-preloader').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(550).css({'overflow':'visible'});

// ------------------------------- AOS Animation
            if ($("[data-aos]").length) { 
            AOS.init({
            duration: 800,
            mirror: true,
            once: true,
            offset: 50,
          });
        }
// ------------------------------- AOS Animation end



    });  //End On Load Function

        // Price Slider
        if($("#range-slider").length) {
          var slider = document.getElementById("myRange");
          var output = document.getElementById("demo");
          output.innerHTML = slider.value;

          slider.oninput = function() {
            output.innerHTML = this.value;
          }

        }
    
})(jQuery);