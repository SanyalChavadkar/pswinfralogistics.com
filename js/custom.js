window.onload = function() {
  AOS.init({
    disable:'mobile',
        easing: 'ease',
         duration: 1000,
      }); 

    // breadcum parallax and sectioon parallax 

    var width=$(window).width();
    if (width > 767) {
      $('.breadcum').parallax_content(); 
      $('.parallax').parallax(); 
    }
  }

$(document).ready(function(argument) {
//active menu navigation
var loc = window.location.pathname;
var page = location.pathname.split('/').pop();
$('.mobile-navbar ul.navbar-active li  a[href*="'+page+'"]').addClass('active');
$('.mobile-navbar ul.navbar-nav li  a.project-active[href*="'+page+'"]').addClass('active');

var loc = window.location.pathname;
var page = location.pathname.split('/').pop();
if(page=='') {
  page = 'index.php';
}

if($('a[href*="'+page+'"]').parent().parent().hasClass('dropdown-menu')) {
  $('a[href*="'+page+'"]').parents('.dropdown').find('a:first').addClass('active');
}
else {
  $('a[href*="'+page+'"]').addClass('active');
}
});


// //cross icon header navigation 

$('#mobile-menu-action').click(function() {
  if($('.mobile-navbar').hasClass('open')) {
    $('.mobile-navbar').removeClass('open');
    $(this).removeClass('active');
  }
  else {
    $('.mobile-navbar').addClass('open');
    $(this).addClass('active');
  }
});

$(document).on('click','.mobile-navbar',function() {
      $('#mobile-menu-action').trigger('click');
    });

// // header shrink js

$(document).on("scroll", function(){
  var width=$(window).width();
  if (width > 767) {
     if($(document).scrollTop() > 100) {
      $("header").addClass("shrink");
    }
    else 
    {
      $("header").removeClass("shrink");
    }

  }
   
});
 // AOS.init();
// <--------------- top arrow --------------------->

    $(document).on("scroll", function() {

        if ($(document).scrollTop() > 800) {
            $(".top-arrow").show();
        } else {
            $(".top-arrow").hide();
        }
    });

    $(document).on('click','.top-arrow', function() {
    $("html, body").animate({ scrollTop: 0 }, 1000);
    });


// smooth scroll hash click
   var hash=window.location.hash;
    var ele=$('.nav-tabs a[href="'+hash+'"][data-toggle="tab"]');
    var ele_top=$('.tab-content');
    if(ele.length > 0) {
      $(ele).trigger('click');
      $("html, body").animate({ scrollTop: $(ele_top).offset().top - ($('.breadcum').height() - 100) }, 1000);
    }
    
       var hash = window.location.hash;
            if (hash!='') {
                $('html, body').animate({
                    scrollTop:$(hash).offset().top - ($('header').height() - 40)}, 1000);
            }


             // home-slider



// counter js animation script start 

   function formatter (value) {
              return value.toFixed(0).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }

            var a = 0;
            $(window).scroll(function() {
              if($('.counter').length > 0) {
                var oTop = $('.counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                  $('.counter-value').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                    $({
                      countNum: $this.text()
                    }).animate({
                      countNum: countTo
                    },
                    {
                      duration: 2000,
                      easing: 'swing',
                      step: function() {
                        $this.text(formatter(Math.floor(this.countNum)));
                      },
                      complete: function() {
                        $this.text(formatter(this.countNum));
                      }
                    });
                  });
                  a = 1;
                }
              }


              
            });



$(document).ready(function(){
$('.home-slider').owlCarousel({
  items:1,
  margin:0,
  nav:false,
  navText: ['<span class="icon-left-arrow"></span>','<span class="icon-right-arrow"></span>'],
  dots: true,
  dotsData: false,
  loop:true,
  autoplay: true,
  smartSpeed:1000,
  autoplayTimeout:5000,
  responsive:{
  0:{
  items:1,
  smartSpeed:1000,
  },
  600:{
  items:1
  },
  1000:{
  items:1
  }
  }
});


$('.home-start-business-slider').owlCarousel({
  items:4,
  margin:20,
  nav:false,
  navText: ['<span class="icon-right-arrow-1"></span>','<span class="icon-right-arrow"></span>'],
  dots:false,
  loop:true,
  autoplay: false,
  smartSpeed:1000,
  autoplayTimeout:5000,
  responsive:{
  0:{
  items:1,
  smartSpeed:1000,
  },
  375:{
  items:1,
  nav:true
  },
  600:{
  items:2,
  nav:true
  },
  1024:{
  items:3,
  nav:true
  },
  1366:{
  items:4,
  nav: false
  }
  }
});

$('.home-industries-slider').owlCarousel({
  items:4,
  margin:10,
  nav:false,
  navText: ['<span class="icon-right-arrow-1"></span>','<span class="icon-right-arrow"></span>'],
  dots:false,
  loop:false,
  autoplay: false,
  smartSpeed:1000,
  autoplayTimeout:5000,
  responsive:{
  0:{
  items:1,
  smartSpeed:1000,
  nav:true
  },
  600:{
  items:2,
  nav:true
  },
  1000:{
  items:4
  }
  }
});


$('.team-slider').owlCarousel({
  items:5,
  margin:10,
  nav:false,
  navText: ['<span class="icon-right-arrow-1"></span>','<span class="icon-right-arrow"></span>'],
  dots:false,
  loop:false,
  autoplay: false,
  smartSpeed:1000,
  autoplayTimeout:5000,
  responsive:{
  0:{
  items:1,
  smartSpeed:1000,
  nav:true
  },
  600:{
  items:3,
  nav:true
  },
  1000:{
  items:4,
  nav:true,
  loop:true
  },
  1366:{
  items:5
  }
  }
});





});








//  // smart sticky header
//  (function(window, document, undefined) {
//     'use strict';
//     // Extend function
//     function extend(a, b) {
//         for (var key in b) {
//             if (b.hasOwnProperty(key)) {
//                 a[key] = b[key];
//             }
//         }
//         return a;
//     }
//     // Throttle function (https://bit.ly/1eJxOqL)
//     function throttle(fn, threshhold, scope) {
//         threshhold || (threshhold = 250);
//         var previous, deferTimer;
//         return function() {
//             var context = scope || this,
//                 current = Date.now(),
//                 args = arguments;
//             if (previous && current < previous + threshhold) {
//                 clearTimeout(deferTimer);
//                 deferTimer = setTimeout(function() {
//                     previous = current;
//                     fn.apply(context, args);
//                 }, threshhold);
//             } else {
//                 previous = current;
//                 fn.apply(context, args);
//             }
//         };
//     }
//     // Class management functions
//     function classReg(className) {
//         return new RegExp('(^|\\s+)' + className + '(\\s+|$)');
//     }
//     function hasClass(el, cl) {
//         return classReg(cl).test(el.className);
//     }
//     function addClass(el, cl) {
//         if (!hasClass(el, cl)) {
//             el.className = el.className + ' ' + cl;
//         }
//     }
//     function removeClass(el, cl) {
//         el.className = el.className.replace(classReg(cl), ' ');
//     }
//     // Main function definition
//     function headsUp(selector, options) {
//         this.selector = document.querySelector(selector);
//         this.options = extend(this.defaults, options);
//         this.init();
//     }
//     // Overridable defaults
//     headsUp.prototype = {
//         defaults: {
//             delay: 300,
//             sensitivity: 20
//         },
//         // Init function
//         init: function(selector) {
//             var self = this,
//                 options = self.options,
//                 selector = self.selector,
//                 oldScrollY = 0,
//                 winHeight;
//             // Resize handler function
//             function resizeHandler() {
//                 winHeight = window.innerHeight;
//                 return winHeight;
//             }
//             // Scroll handler function
//             function scrollHandler() {
//                 // Scoped variables
//                 var newScrollY = window.pageYOffset,
//                     docHeight = document.body.scrollHeight,
//                     pastDelay = newScrollY > options.delay,
//                     goingDown = newScrollY > oldScrollY,
//                     fastEnough = newScrollY < oldScrollY - options.sensitivity,
//                     rockBottom = newScrollY < 0 || newScrollY + winHeight >= docHeight;
//                 // Where the magic happens
//                 if (pastDelay && goingDown) {
//                     addClass(selector, 'heads-up');
//                     removeClass(selector, 'shrink');
//                 } else if (!goingDown && fastEnough && !rockBottom || !pastDelay) {
//                     removeClass(selector, 'heads-up');
//                     addClass(selector, 'shrink');
//                 }
//                 if (newScrollY < 50) {
//                     removeClass(selector, 'shrink');
//                 }
//                 // Keep on keeping on
//                 oldScrollY = newScrollY;
//             }
//             // Attach listeners
//             if (selector) {
//                 // Trigger initial resize
//                 resizeHandler();
//                 // Resize function listener
//                 window.addEventListener('resize', throttle(resizeHandler), false);
//                 // Scroll function listener
//                 window.addEventListener('scroll', throttle(scrollHandler, 100), false);
//             }
//         }
//     };
//     window.headsUp = headsUp;
// })(window, document);
// $(document).ready(function() {
//     // Instantiate HeadsUp
//     new headsUp('header');
// });
// =======================xx==xx============



    // $(document).ready(function(){
    //     var url = window.location.href = 'index.php';;
    //     if(url.search('services.php=true') === true){
    //         $('header').css('display', 'none');
    //     }
    // });
