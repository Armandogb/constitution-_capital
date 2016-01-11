/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

      },
      finalize: function() {
      
        $(".tm-adv-search").on("click",function(){
          $(".trading-extra-options").css("display","inline-block");

        });

      $(".hamburger-nav").on("click",function(){
        $(".mobile-nav").css("display","inline-block");
      });

      $(".hamburger-nav-exit").on("click",function(){
        $(".mobile-nav").css("display","none");
      });
      }
    },
    // Home page
    'home': {
      init: function() {

        $(".big-icon a").hover(function(){
          $(this).parent().find($(".big-icon-hover")).css("z-index",0);
        },function(){
          $(".big-icon-hover").css("z-index",-1);
        });

        $(".home-services-but").hover(function(){
          $(this).css("background-color","red");
        },function(){
          $(this).css("background-color","#A12D3A");
        });

        $(".nav-menu li:nth-child(6) a").hover(function(){
          $(this).css("background-color","#76EE00");
        },function(){
          $(this).css("background-color","#28AE7B");
        });


      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'services': {
      init: function() {

      $(".mobile-phones").one("click",function(){

        $(".phone-2").animate({
            left: "+=20%"
        },"slow");

        $(".phone-3").animate({
            left: "+=40%"
        },"slow");

        $(".phone-1").animate({
            left: "+=60%"
        },"slow");

      });

      $(".laptop-image").one("click",function(){

        $(".bar-animation").animate({
          width: "-=28%"
        },"slow");

        $(".bar-animation").animate({
          width: "+=18%"
        },"slow");

        $(".bar-animation").animate({
          width: "-=18%"
        },"slow");
      
      });



      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
